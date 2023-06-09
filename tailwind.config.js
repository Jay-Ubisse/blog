/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,php}"],
  theme: {
    screens: {
      'mobile': '320px',
      'tablet': '768px',
      'laptop': '1024px',
      'desktop': '1440px',
    },
    extend: {},
  },
  plugins: [],
}

