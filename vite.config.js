
import { defineConfig, splitVendorChunkPlugin } from 'vite'
import liveReload from 'vite-plugin-live-reload'
import path from 'path'

export default defineConfig({

  plugins: [
    liveReload([
      __dirname + '/(app|config|views)/**/*.php',
      __dirname + '/../public/*.php',
    ]),
    splitVendorChunkPlugin(),
  ],
  root: 'resources',
  base: '/',
  build: {
    outDir: 'public',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: path.resolve(__dirname, 'resources/js/app.js'),
    }
  },
})