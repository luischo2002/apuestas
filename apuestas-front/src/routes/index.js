import * as VueRouter from 'vue-router'

import LoginComponent from '@/views/auth/LoginComponent'
import RegisterComponent from '@/views/auth/RegisterComponent'
import HelloWorld from '@/components/HelloWorld'
import PerfilInfo from '@/components/PerfilInfo'

const routes = [
    {path:'/login', name:'login',component:LoginComponent},
    {path:'/register', name:'register',component:RegisterComponent},
    {path:'/home', name:'home',component:HelloWorld},
    {path:'/perfil', name:'perfil',component:PerfilInfo},

]
const router = VueRouter.createRouter({
  history:VueRouter.createWebHistory(),
  routes
})
export default router