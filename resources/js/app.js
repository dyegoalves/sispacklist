require("./bootstrap");
window.Vue = require("vue");

require("./components/registercomponents");
require("./fixmenu");

const app = new Vue({
    el: "#app"
});
