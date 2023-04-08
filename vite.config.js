import { defineConfig } from "vite";
const path = require('path')

export default defineConfig({
  root: path.resolve(__dirname, 'resources'),
  resolve: {
    alias: {
      '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
    }
  },

})