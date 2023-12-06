<template>
<nav class="navbar bg-light fixed-top">
  <div class="container-fluid fixed-top">
    <div class="navbar-brand "><img src="@/assets/img/tecpalacelogo.png"/></div>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Bienvenido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link button btn-primary" aria-current="page" href="#">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registrarse</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mi perfil
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" @click="goPerfil" >Información Personal</a></li>
              <li><a class="dropdown-item" href="#">Modificar Perfil</a></li>
              <li><a class="dropdown-item" href="#">Algo</a></li>
              <li><a class="dropdown-item" href="#">Algo más</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Transacciones
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Depósito</a></li>
              <li><a class="dropdown-item" href="#">Retiro</a></li>
              <li><a href="">ss</a></li>
              <!-- Button trigger modal -->



            </ul>
          </li>
        </ul>

      </div>

    </div>
  </div>

</nav>

</template>

<script>
    export default {
    name: 'HeaderComponent',
    methods:{
            goPerfil(){
                this.$router.push('/perfil')
            }
        }
}
</script>

<style scoped>


a.nav-link.button.btn-primary:hover {
  background-color: rgb(221, 52, 72);
}
a.nav-link:hover {
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