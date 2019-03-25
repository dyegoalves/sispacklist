//Vue.component("example-component", require("./ExampleComponent").default);

// Pesquisar Operacoes
Vue.component(
    "pesquisar-operacoes",
    require("./pesquisarOperacao.vue").default
);

// Register Login components
Vue.component("login-alert", require("./login/alert.vue").default);
