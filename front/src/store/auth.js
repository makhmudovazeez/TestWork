import axios from "axios"

export default {
    namespaced: true,
    state: {
        token: null,
        user: null,
        roles: null,
        permissions: null,
    },
    mutations: {
        storeToken (state, token) {
            state.token = token
            sessionStorage.setItem('token', token)
        },
        storeUser(state, user){
            delete user.roles
            delete user.permissions
            state.user = user
            sessionStorage.setItem('user', user)
        },
        storeRoles(state, roles){
            const roleNames = roles.filter(role => role.name)
            state.roles = roleNames
            sessionStorage.setItem('roles', roleNames)
        },
        storePermissions(state, permissions){
            const permissionNames = permissions.filter(permission => permission.name)
            state.permissions = permissionNames
            sessionStorage.setItem('permissions', permissionNames)
        }
    },
    getters: {
        authenticated(state) {
            return state.token && state.user
        },
        user (state) {
            return {
                id: state.user?.id,
                email: state.user?.email,
                fullname: state.user?.fullname,
            }
        },
        token (state) {
            return state.token
        },
        roles (state){
            return state.roles
        },
        permissions (state){
            return state.permissions
        }
    },
    actions: {
        async login({ dispatch }, credentials) {
            await axios({
                method: 'post',
                url: 'auth/login',
                data: credentials
            }).then(response => {
                return dispatch('attempt', response.data)
            })
        },

        async attempt({ commit }, credentials){
            commit('storeToken', credentials.access_token)
            commit('storeUser', Object.assign({}, credentials.user))
            commit('storeRoles', credentials.user.roles)
            commit('storePermissions', credentials.user.permissions)
        }
    }
}
