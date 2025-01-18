import { createApp } from 'vue';
import App from './layouts/DefaultLayout.vue';

// Configurar Vuetify
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';

// Importar os ícones do Material Design
import '@mdi/font/css/materialdesignicons.css';

const vuetify = createVuetify({
    components,
    directives,
});

createApp(App).use(vuetify).mount('#app');