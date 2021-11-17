require('./bootstrap');

import App from "./components/App.vue";
import { createApp } from "vue";
import store from './components/store/index.js';
import router from "./router.js";

const app = createApp(App);
app.use(store);
app.use(router);

app.mount("#app");



