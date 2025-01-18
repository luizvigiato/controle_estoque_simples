# Usar imagem base do Node.js
FROM node:22-alpine

# Configurar o diretório de trabalho no contêiner
WORKDIR /app

RUN npm install -g npm@11.0.0

# Instalar ferramentas globais necessárias
RUN npm install -g vite @vue/cli dotenv 

# Copiar arquivos do projeto necessários para instalar dependências
COPY package*.json ./

# Instalar dependências do projeto, incluindo Vue 3, Vite e Vuetify
RUN npm install vue @vitejs/plugin-vue vuetify material-design-icons-iconfont material-design-kit @mdi/font sass vue-router @mdi/font

# Instalar dependências do projeto
RUN npm install

# Copiar o restante dos arquivos do projeto para o contêiner
COPY . .

# Expõe a porta usada pelo Vite
EXPOSE 5173

# Comando padrão para rodar o servidor Vite
CMD ["npm", "run", "dev"]
