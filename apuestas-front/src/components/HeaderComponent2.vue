<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="navbar-brand "><img src="@/assets/img/tecpalacelogo.png"/></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" v-if="logeado=0">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link" @click="goHome">Entrar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Registrarse</a>
          </li>
         
          
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" v-if="logeado=1">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mi perfil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" @click="goPerfil">Información Personal</a></li>
              <li><a class="dropdown-item" href="#">Modificar Perfil</a></li>
              <li><a class="dropdown-item" href="#">Algo</a></li>
              <li><a class="dropdown-item" href="#">Algo más</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Transacciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Depósito</a></li>
              <li><RetiroModalComponent/></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

</template>

<script>
    
import RetiroModalComponent from './RetiroModalComponent.vue';
    export default {
    name: 'HeaderComponent2',
    
    methods:{
            goPerfil(){
                this.$router.push('/perfil')
            },
            goHome(){
                this.$router.push('/home')
            }
        },
        data(){
            return{
                logeado:0
            }
        },
        components: {RetiroModalComponent }
}
</script>

<style scoped>


a.nav-link.button.btn-primary:hover {
  background-color: rgb(221, 52, 72);
}
a.nav-link:hover {
  background-color: rgb(221, 52, 72);
}
a{
  color: white;
  background-color: rgb(221, 52, 72);
}
.navbar.bg-light.fixed-top { 
background-color: rgb(221, 52, 72);
}
.container-fluid { 
background-color: rgb(221, 52, 72);
height:60px;
}
.navbar-brand{
margin:auto;
}
img{
  height:50px;
  width:220px;
}


</style>