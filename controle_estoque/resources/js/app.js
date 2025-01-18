import { createApp } from 'vue';
import App from './App.vue'; // Agora usa o App.vue como base
import router from './router';

// Configurar Vuetify
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import '@mdi/font/css/materialdesignicons.css';

const vuetify = createVuetify({
    components,
    directives,
});

createApp(App).use(router).use(vuetify).mount('#app');