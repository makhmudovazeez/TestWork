import axios from "axios"

export default {
    namespaced: true,
    state: {
        token: '',
        user: null
    },
    mutations: {
        storeCredentials (state, credentials) {
            
        }
    },
    actions: {
        async login(_, credentials) {
            axios.post("auth/login", credentials).then(response => {
                console.log(response);
            })
        }
    }
}
