/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/css/**/*.css',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        scorpioPurple: '#8b5cf6',
        scorpioDark: '#060606',
        scorpioLight: '#f5f5f5',
      },
      // Your customizations here, e.g.:
      fontFamily: {
        "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      fontSize: {
        "2xs": "0.625rem", // 10px
      }
    },
  },
  plugins: [
    // any plugins you use
  ],
}