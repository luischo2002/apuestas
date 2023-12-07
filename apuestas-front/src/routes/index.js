import * as VueRouter from 'vue-router'
import LoginXd from '@/components/components/Login'
import SigninXd from '@/components/components/Signin'
//import LoginComponent from '@/views/auth/LoginComponent'
//import RegisterComponent from '@/views/auth/RegisterComponent'
import HelloWorld from '@/components/HelloWorld'
import PerfilInfo from '@/components/PerfilInfo'

const routes = [
    {path:'/login', name:'login',component:LoginXd},
    {path:'/signin', name:'signin',component:SigninXd},
    //{path:'/register', name:'register',component:RegisterComponent},
    //{path:'/login', name:'login',component:LoginComponent},
    {path:'/home', name:'home',component:HelloWorld},
    {path:'/perfil', name:'perfil',component:PerfilInfo},

]
const router = VueRouter.createRouter({
  history:VueRouter.createWebHistory(),
  routes
})
export default router