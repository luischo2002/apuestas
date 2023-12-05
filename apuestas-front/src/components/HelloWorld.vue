<template>
 
  <div class="container"> 
  <HeaderComponent />
    <RetiroModalComponent/>
    <h2>Apuesta y gana</h2>
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
        <tr>
          <td>Cruz Azul <br> Juventus</td>
          <td>
            <button type="button" class="btn btn-danger">Cruz Azul</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Juventus</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Equipo 1 <br> Equipo 2</td>
          <td>
            <button type="button" class="btn btn-danger">Equipo 1</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Equipo 2</button>
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

export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
  components: { HeaderComponent , RetiroModalComponent }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
