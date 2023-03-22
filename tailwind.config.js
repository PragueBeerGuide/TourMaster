const withMT = require("@material-tailwind/react/utils/withMT");

module.exports = withMT({
  content: [
    "./resources/**/*.{blade.php, html, js, jsx, vue}",
  ],
  theme: {
    extend: {},
    colors: {
      'logo-purple': '#3b44ac',
      'logo-orange': '#ff8136',
    }
  },
  plugins: [],
});
