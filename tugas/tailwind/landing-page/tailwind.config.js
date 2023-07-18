/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html"],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    extend: {
      fontFamily: {
        lora: ['Lora']
      },
      colors: {
        cream: '#F8D7A4',
        dark: '#0f172a',
      },
      screens: {
        '2xl': '1320px'
      }
    },
  },
  plugins: [],
}
