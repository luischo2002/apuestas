import * as VueRouter from 'vue-router'

//import LoginComponent from '@/views/auth/LoginComponent'
const routes = [
  //  {path:'/login', name:'login',component:LoginComponent}

]
const router = VueRouter.createRouter({
    history:VueRouter.createWebHistory(),
    routes
})
export default router