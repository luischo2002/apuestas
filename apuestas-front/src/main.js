import { createApp } from 'vue'
import App from './App.vue'
//import 'bootstrap'
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.js"

import axios from 'axios';
axios.defaults.baseURL='http://localhost:8000/api/'


createApp(App).mount('#app')
