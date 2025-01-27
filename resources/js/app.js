import "./bootstrap";
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";
import { createApp } from 'vue';

import IndexComponent from './components/IndexComponent.vue';

const app = createApp({});
app.component('index-component', IndexComponent);

app.mount('#app');