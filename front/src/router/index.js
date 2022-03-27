import Login from '@/pages/auth/Login'
import Main from '@/pages/Main'
import {createRouter, createWebHistory} from 'vue-router'
import axios from 'axios'

axios.defaults.baseURL = 'http://127.0.0.1:8000/api/'

const routes = [
    {
        path: '/',
        name: 'main',
        component: Main,
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    }
]


const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
})

export default router;