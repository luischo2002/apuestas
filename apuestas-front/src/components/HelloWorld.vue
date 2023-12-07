<template>
  <HeaderComponent />
  <img alt="Vue logo" src="../assets/img/78.gif">
  <div class="container">

    <h2>¡Apuesta y gana!</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Partidos
          </th>
          <th>Opciones</th>
          <th>Apostar</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="p in data" v-bind:key="p.id">
          <td>{{ p.equipo1 }} <br>{{ p.equipo2 }} </td>

          <td>
            <button type="button" class="btn btn-danger">{{ p.equipo1 }}</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">{{ p.equipo2 }}</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
      </tbody>
    </table>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:  rgb(221, 52, 72);">
            <h1 class="modal-title fs-5 text-white" id="exampleModalLabel" >Retiro de fondos</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>

              <label class="form-label">Método de retiro</label>
              <div class="mb-3">
                <select name="" class="form-select" v-model="txtMetodo">
                  <option selected value="Clabe">Clabe</option>
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
                <input type="number" class="form-control" id="cantidad_a_retirar" placeholder="0" min="0" max="100000"
                  v-model="txtCantidad">
                <label for="cantidad_a_retirar">Ingrese la cantidad</label>
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button @click="retirar()" class="btn btn-danger">Retirar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Segundo Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Depósito</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>

              <label class="form-label">Método de depósito</label>
              <div class="mb-3">
                <select name="" class="form-select" v-model="txtMetodo">
                  <option selected value="Clabe">Clabe</option>
                </select>
              </div>
              <label for="" class="form-label">Información del depósito</label>
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

              <label for="" class="form-label">Cantidad a depósitar</label>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="cantidad_a_retirar" placeholder="0" min="0" max="100000"
                  v-model="txtCantidadnew">
                <label for="cantidad_a_retirar">Ingrese la cantidad</label>
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Depósitar</button>
            <!-- <button @click="deposito()" class="btn btn-danger">Depósitar</button> -->
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
import HeaderComponent from './HeaderComponent.vue';
import axios from 'axios'

export default {


  components: {
    HeaderComponent,
  },
  data() {
    return {
      data: [],
      url: "http://localhost:8000/api/",

    }
  },
  methods: {
    getData() {
      axios.get('apuestas').then(res => {
        if (res.data.status == 'success') {
          this.data = res.data.data
        }
      })
    },
    retirar(){
            if(this.txtMetodo != null && this.txtClabe != null && this.txtNomBan !=null && this.txtTitular != null && this.txtCantidad != null ){
              console.log(this.txtMetodo)
              console.log(this.txtCantidad)
              console.log(this.txtClabe)
              console.log(this.txtNomBan)
              console.log(this.txtTitular)
              
              axios.get('payment/').then(res=>{
              if(res.data.status == 'success'){
                for (let index = 0; index < res.data.data.length; index++) {
                  const element = res.data.data[index];
                  //console.log(element)
                  //console.log(res.data.data)
                  if(element.numero_tarjeta == this.txtClabe && element.id_usuario == 1){
                    axios.get('users/1').then(resuser=>{
                  if(resuser.data.status == 'success' && resuser.data.data.name == this.txtTitular){
                    axios.put('users/1',{
                //id:localStorage.getItem('id'),
                id:1,
                balance:this.txtCantidad
              }).then(resupdate=>{
                  if(resupdate.data.status=='success'){
                      //codigo pa pagar
                      this.$swal({
                                title:'Exito',
                                text: 'El pago se va a realizar en la cuenta '+this.txtClabe+' en un lapso de 24-48 horas',
                                icon:'success',
                                confirmButtonText:'Entendido'
                            })
                  }else{
                    this.$swal({
                                title: 'Error',
                                text:'Ha ocurrido un error durante la verificación del pago',
                                icon:'error',
                                confirmButtonText:'Entendido'
                            })
                  }
              });
                  }
                })
                break;
                  }
                  this.$swal({
                                title: 'Error',
                                text:'Ha ocurrido un error',
                                icon:'error',
                                confirmButtonText:'Entendido'
                            })
                }
                
              }
            })
            }else{
              this.$swal({
                                title: 'Error',
                                text:'No se ha rellenado la información necesaria para validar el pago',
                                icon:'error',
                                confirmButtonText:'Entendido'
                            })
            }
            
              
          },

          /*
          deposito(){
              axios.put('users/1',{
                id:1,
                balance:this.txtCantidadnew
              }).then(res=>{
                  if(res.data.status=='success'){
                      //codigo pa pagar jeje
                      console.log("Eres el papu de papus")
                      this.$swal({
                                title: 'Error',
                                text:'No hay nada',
                                icon:'error',
                                confirmButtonText:'Chido tu cotorreo'
                            })
                  }else{
                    console.log(res.data)
                  }
              });
          },
          */
      
  },
  mounted() {
    this.getData()
  }

}
</script>

