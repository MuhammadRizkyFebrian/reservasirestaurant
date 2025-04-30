/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.{html,js,php,vue}",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [require('daisyui')],
}
