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
                v-on:keyup="error=false" v-model="txtEmail" type="email" 
                class="form-control bg-ligth input-group-text">
            </div>
            <div class="p-3">
                <label for="">Contraseña</label>
                <input style="border:none;  border-bottom: 2px black solid;border-radius:5; 
                border-top-left-radius:10px;border-top-right-radius:10px;" 
                v-on:keyup="error=false" v-model="txtPassword" type="password" 
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
    export default{
        name:'LoginComponent',
        data(){
            return {
                error:false,
                txtEmail:"admin@gmail.com",
                txtPassword:"admin123",
            }
        },
        methods:{
            login(){
                if(this.txtEmail == 'admin@gmail.com' && 
                    this.txtPassword == 'admin123'){
                    this.$router.push('/home')
                }else{
                    this.error = !this.error
                }
            }
        }
    } 
</script>

<style>
body {
    margin-top: -60px;
    
}
</style>


