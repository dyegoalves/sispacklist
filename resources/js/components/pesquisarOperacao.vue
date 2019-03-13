<script>
export default {
  data() {
    return {
      pesquisaOP: ""
    };
  },

  mounted() {
    console.log("Component Pesquisa.");
  },

  methods: {
    enviarOP: function() {
      alert(this.pesquisaOP);
    }
  }
};
</script>

<style>
#lbpesquisaOP {
  color: #b8c7ce;
  font-size: 14px;
  font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 400;
}

#txtpesquisaOP {
  border-radius: 2px;
}

#txtpesquisaOP::placeholder {
  font-size: 13px;
}
</style>

<template>
  <div>
    <li class="header">
      <label class="control-label" id="lbpesquisaOP" for="lbpesquisaOP">Pesquisar Operações</label>
      <input
        type="text"
        class="form-control"
        id="txtpesquisaOP"
        aria-describedby="inputSuccess3Status"
        v-model="pesquisaOP"
        v-on:keyup.enter="enviarOP"
        placeholder="Digite a Operação e dê Enter"
      >
    </li>
  </div>
</template>