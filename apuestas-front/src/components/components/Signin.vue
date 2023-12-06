<template>
  <div class="d-flex justify-content-center aling-items-center vh-100 bg-danger" >
    <div class='bg-white m-5 p-5 rounded-5 justify-content-center aling-items-center' style="width:23rem; height:30rem">
        <div class='d-flex justify-content-center'>
            <img src="../../assets/img/tecpalacelogocl.png" alt="A" style="height: 5rem" />
        </div>
        <h1 class="text-center fw-bold">Crear Cuenta</h1>
        <div class="p-3">
          <label for="">Nombre</label>
          <input style="border:none;  border-bottom: 2px black solid;border-radius:5; 
          border-top-left-radius:10px;border-top-right-radius:10px;" 
          v-on:keyup="error=false" v-model="name" type="text" 
          class="form-control bg-ligth input-group-text">
      </div>
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
            <button @click="login" class="btn btn-danger">Crear</button>
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
  data() {
    return {
      name:'',
      emai: '',
      password: '',
    };
  },
  methods: {
    async signUp() {
      try {
        const response = await axios.post('api/database/migration/users',{
          name: this.username,
          email: this.email,
          password: this.password,
        });

     
        console.log('Usuario creado con éxito:', response.data);

     
        this.$router.push('/login.vue');
      } catch (error) {
        console.error('Error al crear el usuario:', error);

      
      }
    },
  },
};
  </script>
  
  <style scoped>
  /* Estilos específicos del componente, si es necesario */
  </style>