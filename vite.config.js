import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
  plugins: [
    react(),
  ],
  build: {
    rollupOptions: {
      input: '/resources/js/app.jsx',  // Make sure the path is correct
    },
  },
});
