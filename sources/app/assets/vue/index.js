import Vue from "vue";
import App from "./App";
import router from "./router";

new Vue({
  components: { App },
  router: router,
  template: "<App/>"
}).$mount("#app");