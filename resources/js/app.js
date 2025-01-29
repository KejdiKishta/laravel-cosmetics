import "./bootstrap";
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";
import { createApp } from 'vue';

import IndexComponent from './components/IndexComponent.vue';
import AdminIndexComponent from "./components/AdminIndexComponent.vue";
import AdminShowComponent from "./components/AdminShowComponent.vue";

const app = createApp({});
app.component('index-component', IndexComponent);
app.component('admin-index-component', AdminIndexComponent);
app.component('admin-show-component', AdminShowComponent);

app.mount('#app');