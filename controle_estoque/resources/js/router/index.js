import { createRouter, createWebHistory } from 'vue-router';
import DefaultLayout from '@/layouts/DefaultLayout.vue';
import FornecedorForm from '@/components/FornecedorForm.vue';

const routes = [
  {
    path: '/',
    component: DefaultLayout, // Layout principal
    children: [
      {
        path: '', // Rota principal (Dashboard)
        name: 'Dashboard',
        component: () => import('@/components/Dashboard.vue'),
      },
      {
        path: 'cadastro-fornecedor', // Rota para o formulário de cadastro
        name: 'CadastroFornecedor',
        component: FornecedorForm,
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
