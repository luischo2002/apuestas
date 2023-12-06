<template>
  <HeaderComponent />
  <img alt="Vue logo" src="../assets/img/logo.png">
  <div class="container">
    <RetiroModalComponent/>
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
          <td>Real Madrid <br> Atlas</td>
          <td>
            <button type="button" class="btn btn-danger">Real Madrid</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Atlas</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>PSG <br> FC Juárez</td>
          <td>
            <button type="button" class="btn btn-danger">PSG</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">FC Juárez</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Liverpool <br> América</td>
          <td>
            <button type="button" class="btn btn-danger">Liverpool</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">América</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Inter Miami <br> Pumas UNAM</td>
          <td>
            <button type="button" class="btn btn-danger">Inter Miami</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Pumas UNAM</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Manchester United <br> Santos Laguna</td>
          <td>
            <button type="button" class="btn btn-danger">Manchester United</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Santos Laguna</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Bayern Munich <br> Tigres UANL</td>
          <td>
            <button type="button" class="btn btn-danger">Bayern Munich</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Tigres UANL</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>FC Barcelona <br> Puebla</td>
          <td>
            <button type="button" class="btn btn-danger">FC Barcelona</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Puebla</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Boca Juniors <br> Necaxa</td>
          <td>
            <button type="button" class="btn btn-danger">Boca Juniors</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Necaxa</button>
          </td>

          <td>
            <input type="text" class="form-control" placeholder="Apostar">
          </td>

        </tr>
        <tr>
          <td>Arsenal <br> Chivas</td>
          <td>
            <button type="button" class="btn btn-danger">Arsenal</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Empate</button>
            <span style="margin-right: 10px;"></span>
            <button type="button" class="btn btn-danger">Chivas</button>
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
