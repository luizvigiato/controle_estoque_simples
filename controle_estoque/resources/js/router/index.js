import { createRouter, createWebHistory } from 'vue-router';
import DefaultLayout from '@/layouts/DefaultLayout.vue';
import Dashboard from '@/components/Dashboard.vue';
import FornecedorForm from '@/components/FornecedorForm.vue';
import FornecedoresTable from '@/components/FornecedoresTable.vue';

const routes = [
  {
    path: '/',
    component: DefaultLayout,
    children: [
      {
        path: '', // Dashboard como rota padrão
        name: 'Dashboard',
        component: Dashboard,
      },
      {
        path: 'cadastro-fornecedor',
        name: 'CadastroFornecedor',
        component: FornecedorForm,
      },
      {
        path: 'fornecedores',
        name: 'Fornecedores',
        component: FornecedoresTable,
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
