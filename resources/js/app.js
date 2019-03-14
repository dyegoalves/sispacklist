require("./bootstrap");
window.Vue = require("vue");
require("./registercomponents");

const app = new Vue({
    el: "#app"
});

// Fix menu Actived

var url = window.location;

// for sidebar menu entirely but not cover treeview
$("ul.sidebar-menu a")
    .filter(function() {
        return this.href == url;
    })
    .parent()
    .addClass("active");

// for treeview
$("ul.treeview-menu a")
    .filter(function() {
        return this.href == url;
    })
    .parentsUntil(".sidebar-menu > .treeview-menu")
    .addClass("active");
