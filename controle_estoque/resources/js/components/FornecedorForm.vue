<template>
  <v-container>
    <v-card>
      <v-card-title>Cadastrar Fornecedor</v-card-title>
      <v-card-text>
        <v-form ref="form" v-model="valid">
          <v-text-field
            label="Nome"
            v-model="formData.nome"
            :rules="[rules.required]"
          ></v-text-field>
          <v-text-field
            label="Razão Social"
            v-model="formData.razao_social"
            :rules="[rules.required]"
          ></v-text-field>
          <v-text-field
            label="CNPJ"
            v-model="formData.cnpj"
            :rules="[rules.required, rules.cnpj]"
          ></v-text-field>
          <v-text-field label="Endereço" v-model="formData.endereco"></v-text-field>
          <v-text-field label="CEP" v-model="formData.cep"></v-text-field>
          <v-text-field
            label="Telefone"
            v-model="formData.telefone"
            :rules="[rules.required]"
          ></v-text-field>
          <v-text-field
            label="Estado"
            v-model="formData.estado"
            :rules="[rules.required]"
          ></v-text-field>
          <v-text-field
            label="Cidade"
            v-model="formData.cidade"
            :rules="[rules.required]"
          ></v-text-field>
          <v-btn :disabled="!valid" @click="submitForm">Cadastrar</v-btn>
        </v-form>
      </v-card-text>
    </v-card>
  </v-container>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      valid: false,
      formData: {
        nome: '',
        razao_social: '',
        cnpj: '',
        endereco: '',
        cep: '',
        telefone: '',
        estado: '',
        cidade: '',
      },
      rules: {
        required: (value) => !!value || 'Este campo é obrigatório.',
        cnpj: (value) =>
          /^[0-9]{14}$/.test(value) || 'CNPJ deve ter exatamente 14 dígitos.',
      },
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await axios.post('/api/fornecedores', this.formData);
        alert(response.data.message);
        this.$router.push('/'); // Redireciona para a página inicial ou outro lugar
      } catch (error) {
        alert('Erro ao cadastrar fornecedor: ' + error.response.data.message);
      }
    },
  },
};
</script>
