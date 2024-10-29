/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        klinikBlue: '#036CA1',
        hovWhite: 'rgba(255, 255, 255, 0.3)',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
};
