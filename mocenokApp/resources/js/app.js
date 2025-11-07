import './bootstrap';
import { createApp } from 'vue';
import 'flowbite';
import '../css/app.css'

import App from './components/App.vue';

const app = createApp(App);

app.mount('#app');
