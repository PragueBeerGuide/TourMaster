/** @type {import('tailwindcss').Config} */
const withMT = require("@material-tailwind/react/utils/withMT");
 
module.exports = withMT({
  content: [ 
    "./resources/**/*.{blade.php, js, jsx}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.jsx",
    "./resources/js/src/App.jsx",
    "./resources/views/welcome.blade.php",
    "./index.html",
    "./src/**/*.{js, jsx}"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
});
