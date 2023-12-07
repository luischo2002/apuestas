<template>
<HeaderComponent />
<div class="d-flex justify-content-center aling-items-center vh-150 bg-danger p-4" >
        <div class='bg-white m-5 p-5 rounded-5 justify-content-center aling-items-center' style="width:23rem; height:33rem">
            <div class='d-flex justify-content-center'>
                <img src="../assets/img/defaultuser.png" alt="A" style="height: 7rem" />
            </div>
            <h1 class="text-center fw-bold p-2">Mi Perfil</h1>
            <div class="p-1">
                <label for="">Nombre:</label>
                <p>Administrador</p>
            </div>
            <div class="p-1">
                <label for="">Correo electronico:</label>
                <p>admin</p>

            </div>
            <div class="p-1">
                <label for="">Num. Tarjeta:</label>
                <p>123456789</p>
                
            </div>
            <div class="p-1">
                <label for="">Total de fondos:</label>
                <p>$1000.00</p>
                
            </div>
            
        </div>

    </div>
</template>

<script>

import HeaderComponent from './HeaderComponent.vue';


export default {
  name: 'PerfilInfo',
  props: {
    msg: String
  },

    components: { 
    HeaderComponent,
    },

  }
</script>

<!-- <img alt="Vue logo" src="../assets/logo.png"> Add "scoped" attribute to limit CSS to this component only -->
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
