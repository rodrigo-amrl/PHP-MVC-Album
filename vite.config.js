
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
    manifest: true,
    rollupOptions: {
      input: '/public/app.js',
    },
  },
})