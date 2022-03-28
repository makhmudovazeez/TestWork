import Login from '@/pages/auth/Login'
import MainLayout from '@/layouts/MainLayout'
import {createRouter, createWebHistory} from 'vue-router'
import authentication from '../middleware/authentication'


const routes = [
    {
        path: '/',
        component: MainLayout,
        meta: {
            middleware: [authentication]
        },
        children: [
            { path: 'home', name: 'home', component: () => import('@/pages/Home') },

            { path: 'users',  name: 'users', component: () => import('@/pages/users/Index') },
            { path: 'userss/:id',  name: 'users-show', component: () => import('@/pages/users/Show') },
            { path: 'users/create',  name: 'users-create', component: () => import('@/pages/users/Create') },
            { path: 'users/:id/edit',  name: 'users-edit', component: () => import('@/pages/users/Edit') },

            { path: 'permissions',  name: 'permissions', component: () => import('@/pages/permissions/Index') },
            { path: 'permissions/:id',  name: 'permissions-show', component: () => import('@/pages/permissions/Show') },
            { path: 'permissions/create',  name: 'permissions-create', component: () => import('@/pages/permissions/Create') },
            { path: 'permissions/:id/edit',  name: 'permissions-edit', component: () => import('@/pages/permissions/Edit') },

            { path: 'roles',  name: 'roles', component: () => import('@/pages/roles/Index') },
            { path: 'roles/:id',  name: 'roles-show', component: () => import('@/pages/roles/Show') },
            { path: 'roles/create',  name: 'roles-create', component: () => import('@/pages/roles/Create') },
            { path: 'roles/:id/edit',  name: 'roles-edit', component: () => import('@/pages/roles/Edit') },
            
        ]
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        
    }
]


const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
})

export default router;