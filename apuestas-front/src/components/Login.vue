<!-- Login.vue -->

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
          <label class="form-label" for="username">Usuario:</label>
          <input class="form-control" type="text" id="username" v-model="username" required placeholder="Nombre o Usuario">
      
          <label class="form-label" for="password">Contraseña:</label>
          <input class="form-control" type="password" id="password" v-model="password" required>
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
      };
    },
    methods: {
      logear(){
            axios.patch('users',{
                name:this.username,
                password:this.password
            }).then(res=>{
                if(res.data.name=='' && res.data.password==''){
                    //
                }else{
                  //
                }
            });
        }
    },
  };
</script>
