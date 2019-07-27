<script>
export default {
  data() {
    return {
      pesquisaOP: "",
      error: ""
    };
  },

  computed() {},
  mounted() {},

  methods: {
    enviarOP: function(e) {
      const self = this;
      axios
        .post("/cmd-operacao", {
          pesquisaOP: this.pesquisaOP.toUpperCase()
        })
        .then(function(response) {
          if (response.data.rota) {
            window.location = response.data.rota;
          } else {
            self.error = response.data.error;
            setTimeout(function() {
              self.error = null;
            }, 2000);
          }
        })
        .catch(function(error) {});
    }
  }
};
</script>

<style>
#lbpesquisaOP {
  color: #b8c7ce;
  font-size: 16px;
  font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 400;
}
#txtpesquisaOP {
  border-radius: 1px;
}
#txtpesquisaOP::placeholder {
  font-size: 12px;
}
#errorcmd {
  color: #b8c7ce;
  font-size: 16px;
  font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 400;
}
</style>

<template>
  <div>
    <li class="header">
      <label class="control-label" id="lbpesquisaOP" for="lbpesquisaOP">Pesquisar Operações</label>
      <input
        type="text"
        class="form-control input-peq"
        id="txtpesquisaOP"
        name="txtpesquisaOP"
        aria-describedby="inputSuccess3Status"
        v-model="pesquisaOP"
        v-on:keyup.enter="enviarOP"
        placeholder="Digite a Operação e dê Enter"
      />
    </li>

    <li id="errorlb" v-if="error" v-on="apagar" class="alert header">
      <label class="control-label" id="errorcmd" for="errorcmd">{{error}}</label>
    </li>
  </div>
</template>