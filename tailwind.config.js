/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.{js,php,html}",
    "./node_modules/tw-elements/dist/js/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require("tw-elements/dist/plugin.cjs")
  ],
  darkMode: "class"
}

