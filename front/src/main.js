import { createApp } from 'vue'
import App from './App.vue'
import "bootstrap/dist/css/bootstrap.min.css"
import components from '@/components/UI'
import router from './router'
import store from './store/index'
import axios from 'axios'
import middleware from "@grafikri/vue-middleware"
import "fontawesome"


const app = createApp(App)

components.forEach(component => {
    app.component(component.name, component)
});

axios.defaults.baseURL = 'http://test.backend.loc/api/'

router.beforeEach(middleware({store}))

app.use(router)
    .use(store)
    .mount('#app')
