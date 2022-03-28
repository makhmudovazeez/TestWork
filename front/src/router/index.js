import Login from '@/pages/auth/Login'
import Main from '@/pages/Main'
import {createRouter, createWebHistory} from 'vue-router'
import authentication from '../middleware/authentication'


const routes = [
    {
        path: '/',
        name: 'main',
        component: Main,
        meta: {
            middleware: [authentication]
        }
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