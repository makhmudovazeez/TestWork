import { createApp } from 'vue'
import App from './App.vue'
import "bootstrap/dist/css/bootstrap.min.css"
import components from '@/components/UI'
import router from './router'
import middleware from '@grafikri/vue-middleware'
import authentication from './middleware/authentication'

const app = createApp(App)

components.forEach(component => {
    app.component(component.name, component)
});

app
    .use(router)
    .mount('#app')
