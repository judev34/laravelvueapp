import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import { createApp } from "vue/dist/vue.esm-bundler.js";
import router from './router/index';
import CustomerIndex from './components/CustomerIndex.vue';

createApp({
    components: {
        CustomerIndex,
    }
}).use(router).mount('#app');


