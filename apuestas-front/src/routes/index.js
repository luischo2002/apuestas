import * as VueRouter from 'vue-router'
import Login from '@/components/components/Login'
import Signin from '@/components/components/Signin'
//import LoginComponent from '@/views/auth/LoginComponent'
//import RegisterComponent from '@/views/auth/RegisterComponent'
import HelloWorld from '@/components/HelloWorld'
import PerfilInfo from '@/components/PerfilInfo'

const routes = [
    {path:'/login', name:'login',component:Login},
    {path:'/signin', name:'signin',component:Signin},
    //{path:'/register', name:'register',component:RegisterComponent},
    {path:'/home', name:'home',component:HelloWorld},
    {path:'/perfil', name:'perfil',component:PerfilInfo},

]
const router = VueRouter.createRouter({
  history:VueRouter.createWebHistory(),
  routes
})
export default router