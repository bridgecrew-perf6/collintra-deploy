module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'bluebg': '#f7fbff',
            'darkbluebg': '#e5eef7'
        }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
