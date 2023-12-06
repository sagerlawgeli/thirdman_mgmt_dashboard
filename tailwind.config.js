import preset from './vendor/filament/support/tailwind.config.preset'
import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'
/** @type {import('tailwindcss').Config} */
export default {
  presets: [preset],
  content: [
    './resources/views/filament/**/*.blade.php',
    "./src/**/*.{blade.php,html,js}",
    './app/Filament/**/*.php',
    './vendor/filament/**/*.blade.php',],
  theme: {
    extend: {},
  },
  plugins: [
    require("daisyui"),
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/filament/admin/theme.css'],
      refresh: [
        ...refreshPaths,
        'app/Livewire/**',
      ],
    }),
  ],
}

