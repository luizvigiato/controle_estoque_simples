<template>
  <v-app>
    <v-navigation-drawer app>
      <v-list>
        <v-list-item-group>
          <v-list-item v-for="item in items" :key="item.text" @click="navigate(item.link)">
            <v-list-item-icon>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-icon>
            <v-list-item-title>{{ item.text }}</v-list-item-title>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
    <v-main>
      <v-app-bar app>
        <v-toolbar-title>Dashboard</v-toolbar-title>
      </v-app-bar>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
export default {
  data() {
    return {
      items: [
        { text: 'Dashboard', icon: 'mdi-view-dashboard', link: '/' },
        { text: 'Configurações', icon: 'mdi-cog', link: '/settings' },
        { text: 'Cadastro de Fornecedor', icon: 'mdi-account-plus', link: '/cadastro-fornecedor' }, // Novo item
      ],
    };
  },
  methods: {
    navigate(link) {
      this.$router.push(link);
    },
  },
};
</script>


<style scoped>
/* Estilos adicionais se necessário */
</style>
