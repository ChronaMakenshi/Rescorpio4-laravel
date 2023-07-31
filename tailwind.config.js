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
      fontFamily: {
        'body': ['Orbitron'],
      },
      colors: {
        'neutral-800': '#212529',
        'red-900': '#5C0000',
      },
      boxShadow: {
        'mb': '10px 10px #5C0000;',
        'nb': '-10px 10px #5C0000;',
      },
      screens: {
        '3xl': '1800px',
        '4xl': '2500px'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

