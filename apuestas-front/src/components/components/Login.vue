<template>
  <div class="d-flex justify-content-center aling-items-center vh-100 bg-danger" >
    <div class='bg-white m-5 p-5 rounded-5 justify-content-center aling-items-center' style="width:23rem; height:30rem">
        <div class='d-flex justify-content-center'>
            <img src="../../assets/img/tecpalacelogocl.png" alt="A" style="height: 5rem" />
        </div>
        <h1 class="text-center fw-bold">Iniciar sesion</h1>
        <div class="p-3">
            <label for="">Correo electronico</label>
            <input style="border:none; border-bottom: 2px black solid;border-radius:5;
            border-top-left-radius:10px;border-top-right-radius:10px;" 
            v-on:keyup="error=false" v-model="email" type="email" 
            class="form-control bg-ligth input-group-text">
        </div>
        <div class="p-3">
            <label for="">Contraseña</label>
            <input style="border:none;  border-bottom: 2px black solid;border-radius:5; 
            border-top-left-radius:10px;border-top-right-radius:10px;" 
            v-on:keyup="error=false" v-model="password" type="password" 
            class="form-control bg-ligth input-group-text">
        </div>
        <div class='d-flex ap-3 justify-content-center aling-items-center'>
            <button @click="login" class="btn btn-danger">Ingresar</button>
        </div>
        <div v-if="error" class="p-3 alert alert-danger">
            Credenciales Incorrectas
        </div>
    </div>

</div>
</template>

<script>
import axios from 'axios';

export default {
  name:'LoginXd',
  data() {
    return {
      email: '',
      password: '',
    };
  },
  methods: {
    async login() {
      try {
        const response = await axios.get('login', {
          email: this.email,
          password: this.password,
        });
        console.log('Inicio de sesión exitoso:', response.data);
        localStorage.setItem('token', response.data.token);
        this.$router.push('/home');

      } catch (error) {
        this.error = !this.error

      }
    },
  },
};
</script>

<style>
body {
    margin-top: -60px;
    
}
</style>
