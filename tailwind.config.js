/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    fontFamily: {
        'lora': ['Lora', 'sans-serif'],
        'roboto': ['Roboto', 'sans-serif'],
        'readex': ['Readex Pro', 'sans-serif'],
      },
    extend: {},
  },
  plugins: [],
}

