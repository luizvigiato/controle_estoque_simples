<template>
  <v-container>
    <v-card>
      <v-card-title>
        <h3>Fornecedores</h3>
      </v-card-title>
      <v-card-text>
        <v-data-table
          :headers="headers"
          :items="fornecedores"
          item-value="id"
        >
          <template v-slot:item="{ item }">
            <tr @click="openModal(item.id)">
              <td>{{ item.nome }}</td>
              <td>{{ item.cidade }}</td>
              <td>{{ item.telefone }}</td>
            </tr>
          </template>
        </v-data-table>
      </v-card-text>
    </v-card>

    <!-- Modal para Detalhes do Fornecedor -->
    <v-dialog v-model="dialog" max-width="600px">
      <v-card>
        <v-card-title>
          <span class="text-h5">Detalhes do Fornecedor</span>
        </v-card-title>
        <v-card-text>
          <p><strong>Nome:</strong> {{ selectedFornecedor?.nome || 'N/A' }}</p>
          <p><strong>Razão Social:</strong> {{ selectedFornecedor?.razao_social || 'N/A' }}</p>
          <p><strong>CNPJ:</strong> {{ selectedFornecedor?.cnpj || 'N/A' }}</p>
          <p><strong>Endereço:</strong> {{ selectedFornecedor?.endereco || 'N/A' }}</p>
          <p><strong>CEP:</strong> {{ selectedFornecedor?.cep || 'N/A' }}</p>
          <p><strong>Telefone:</strong> {{ selectedFornecedor?.telefone || 'N/A' }}</p>
          <p><strong>Estado:</strong> {{ selectedFornecedor?.estado || 'N/A' }}</p>
          <p><strong>Cidade:</strong> {{ selectedFornecedor?.cidade || 'N/A' }}</p>
        </v-card-text>
        <v-card-actions>
          <v-btn color="primary" text @click="dialog = false">Fechar</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-container>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      fornecedores: [], // Lista de fornecedores
      headers: [
        { text: 'Nome', value: 'nome' },
        { text: 'Cidade', value: 'cidade' },
        { text: 'Telefone', value: 'telefone' },
      ],
      dialog: false, // Controla a visibilidade do modal
      selectedFornecedor: null, // Fornecedor selecionado
    };
  },
  methods: {
    // Buscar a lista de fornecedores da API
    fetchFornecedores() {
      axios.get('/api/fornecedores').then((response) => {
        this.fornecedores = response.data;
      });
    },
    // Abrir o modal com os dados do fornecedor
    openModal(fornecedorId) {
      this.selectedFornecedor = this.fornecedores.find(f => f.id === fornecedorId); // Buscar pelo ID
      console.log(this.selectedFornecedor);
      this.dialog = true;
    },
  },
  mounted() {
    // Carregar os fornecedores quando o componente é montado
    this.fetchFornecedores();
  },
};
</script>

<style scoped>
/* Estilos adicionais */
</style>
