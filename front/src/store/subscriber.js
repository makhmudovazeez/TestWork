import store from "@/store";
import axios from "axios";

store.subscribe(mutation => {
    switch(mutation.type){
        case 'auth/storeToken':
            axios.defaults.headers.common
        break;
    }
});