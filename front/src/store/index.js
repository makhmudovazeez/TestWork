import { createApp } from 'vue'
import { createStore } from 'vuex'
import auth from './auth'

// Create a new store instance.
const store = createStore({
  state: {
    token: '',
    user: null
  },
  mutations: {

  },
  actions: {

  },
  modules: {
    async login(_, credentials) {
        axios.post("auth/login", credentials).then(response => {
            console.log(response);
        })
    }
  }
})

const app = createApp({ /* your root component */ })

// Install the store instance as a plugin
app.use(store)