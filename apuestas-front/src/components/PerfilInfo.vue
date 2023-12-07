<template>
<HeaderComponent />
<div class="d-flex justify-content-center aling-items-center vh-150 bg-danger p-4" >
        <div class='bg-white m-5 p-5 rounded-5 justify-content-center aling-items-center' style="width:23rem; height:33rem">
            <div class='d-flex justify-content-center'>
                <img src="../assets/img/defaultuser.png" alt="A" style="height: 7rem" />
            </div>
            <h1 class="text-center fw-bold p-2">Mi Perfil</h1>
            <div class="p-1" v-for="p in data" v-bind:key="p.id">
                <label for="">Nombre:</label>
                <p></p>
                <label>{{ p.name }}</label>
                <p></p>
            </div>

            <div class="p-1" v-for="p in data" v-bind:key="p.id">
                <label for="">Correo electronico:</label>
                <p></p>
                <label>{{ p.email }}</label>
                <p></p>
            </div>

            <div class="p-1">
                <label for="">Num. Tarjeta:</label>
                <p>123456789</p>
                
            </div>
            <div class="p-1" v-for="p in data" v-bind:key="p.id">
                <label for="">Total de fondos:</label>
                <p></p>
                <label>${{ p.balance }}.00</label>
                <p></p>
                
            </div>

            <input v-on:keyup.enter="searchProduct" v-model="txtId" 
            type="number" placeholder="Prueba para mostrar los usuarios" class="form-control">
            
        </div>

    </div>
</template>

<script>

import HeaderComponent from './HeaderComponent.vue';
import axios from 'axios'


export default {
  name: 'PerfilInfo',
  props: {
    msg: String
  },

    components: { 
    HeaderComponent,
    },

data() {
    return {
      data: [],
      url: "http://localhost:8000/api/",

    }
  },

 //axios.get(this.url+"products/"+this.txtCodigo)

    methods: {
    getData() {
      axios.get(this.url+"users/").then(res => {
        if (res.data.status == 'success') {
          this.data = res.data.data
        }
      })
    },
    searchProduct(){
                if(this.txtCodigo!=""){
                    axios.get(this.url+"users/"+this.txtId).then(result=>{
                        if(result.data.status == 'error'){
                            this.$swal({
                                title: 'ERROR!',
                                text: 'PRODUCTO NO ENCONTRADO',
                                icon: 'error',
                                confirmButtonText: 'Cool'
                            });
                        } else{
                            this.$swal({
                                //title: 'SUCCESS!',
                                title: result.data.data.name,
                                text: result.data.data.email,
                                //text: result.data.data.balance,
                                icon: 'success',
                                //confirmButtonText: 'OK!',
                                confirmButtonText: result.data.data.balance
                            })
                        }
                    })
                } 
            },
  },

  mounted() {
    this.getData()
  }
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
