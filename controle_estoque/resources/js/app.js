import { createApp } from 'vue';
import App from './layouts/DefaultLayout.vue';
import router from './router';

// Configurar Vuetify
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import '@mdi/font/css/materialdesignicons.css';

// Importar os ícones do Material Design
import '@mdi/font/css/materialdesignicons.css';

const vuetify = createVuetify({
    components,
    directives,
});

createApp(App).use(router).use(vuetify).mount('#app');