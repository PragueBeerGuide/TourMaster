/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      'logo-purple': '#3b44ac',
      'logo-orange': '#ff8136',
    }
  },
  plugins: [],
}
