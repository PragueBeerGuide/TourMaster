const withMT = require("@material-tailwind/react/utils/withMT");

module.exports = withMT({
  content: [
    "./resources/**/*.{blade.php, html, js, jsx, vue}",
  ],
  theme: {
    extend: {
      'hero-pattern': "url('public/images/stock-photo-hands-hold-beverage-beers-bottle-cheers-560892721.jpg')"
    },
    colors: {
      'logo-purple': '#3b44ac',
      'logo-orange': '#ff8136',
    }
  },
  plugins: [],
});
