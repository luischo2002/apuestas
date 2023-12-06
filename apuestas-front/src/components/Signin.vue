<template>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Iniciar sesion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label class="form-label" for="username">Nombre </label>
            <input class="form-control" type="text" id="username" v-model="username" required placeholder="Nombre o Usuario">
        
            <label class="form-label" for="password">Contraseña:</label>
            <input class="form-control" type="password" id="password" v-model="password" required>

            <label class="form-label" for="password">Correo:</label>
            <input class="form-control" type="email" id="email" v-model="email" required>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        name: '',
        password: '',
        email: '',
      };
    },
    methods: {
        retirar(){
            axios.patch('users',{
                user:this.username,
                password:this.password,
                email:this.email
            }).then(res=>{
                if(username==' ' && password==' ' && emai==' '){
                    //
                }else{
                    //
                }
            });
        }
    }
  };
  </script>
  
  <style scoped>
  /* Estilos específicos del componente, si es necesario */
  </style>