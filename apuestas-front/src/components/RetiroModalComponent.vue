<template>
<div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

                    <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Retiro de fondos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
    <label class="form-label" >Método de retiro</label>
  <div class="mb-3">
    <select name="" class="form-select" v-model="txtMetodo">
        <option selected value="Clabe" >Clabe</option>
    </select>
  </div>
  <label for="" class="form-label">Información de retiro</label>
  <div class="row g-2">
    <div class="col md">
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="nom_banco" v-model="txtNomBan">
  <label for="nom_banco">Nombre del banco</label>
</div>
    </div>
<div class="col md">
    <div class="form-floating mb-3">
  <input type="number" class="form-control" id="cuenta_clabe" v-model="txtClabe">
  <label for="cuenta_clabe">Cuenta Clabe</label>
</div>
</div>
  </div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="titular_cuenta" v-model="txtTitular">
  <label for="titular_cuenta">Titular de la cuenta</label>
</div>

<label for="" class="form-label">Cantidad a retirar</label>
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="cantidad_a_retirar" placeholder="0" min="0" max="100000" v-model="txtCantidad">
  <label for="cantidad_a_retirar">Ingrese la cantidad</label>
</div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
  <button type="submit" class="btn btn-primary">Retirar</button>
      </div>
    </div>
  </div>
</div>

</div>


</template>

<script>
import axios from 'axios';
export default {
        name: 'RetiroModalComponent',
        methods:{
        retirar(){
            axios.patch('users',{
                balance:this.txtCantidad
            }).then(res=>{
                if(res.data.status=='success'){
                    //codigo pa pagar jeje
                }
            });
        }
    }
    }
    
</script>