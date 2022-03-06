module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'bluebg': '#f7fbff'
        }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
