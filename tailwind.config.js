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
    "./resources/views/auth/login.blade.php",
    "./src/**/*.{js, jsx}"
  
  ],
  theme: {
    colors: {
      primary: '#3b44ac',
      'logo-t': '#3b44ac',
      'logo-bg': '#ff8136',
    },
    screens: {
      'sm': '420px',
      // => @media (min-width: 420px) { ... }

      'sx': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    extend: {},
  },
  plugins: [],
});
