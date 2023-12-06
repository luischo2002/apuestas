<template>
  <HeaderComponent />
  <img alt="Vue logo" src="../assets/img/logo.png">
  <div class="container">
    <RetiroModalComponent />
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
  </div>
</template>

<script>
import HeaderComponent from './HeaderComponent.vue';
import RetiroModalComponent from './RetiroModalComponent.vue';
import axios from 'axios'

export default {


  components: {
    HeaderComponent,
    RetiroModalComponent
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
    }
  },
  mounted() {
    this.getData()
  }

}
</script>

