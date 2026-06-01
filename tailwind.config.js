/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px'
    },
    extend: {
      colors: {
        'custom-blue-dark': '#0c1338',
        'custom-blue-deep': '#000073',
        'custom-blue-navy': '#000080',
        'custom-blue-light': '#d9e4ff',
        'custom-red-brand': '#e90101',
        'custom-red-dark': '#d80000',
        'custom-text-primary': '#1c2539',
        'custom-text-secondary': '#5d666f',
        'custom-text-content': '#1d242d',
        'custom-orange': '#e04700',
        'custom-footer-bg': '#00002d',
        'custom-footer-icon': '#3e484e',
      },

      fontFamily: {
        inter: ['Inter', 'sans-serif'],
      },

      borderRadius: {
        '4xl': '2rem',
        '5xl': '2.5rem',
        '6xl': '3rem',
        'full-plus': '212px',
      },

      spacing: {
        ...(() => {
          const result = {};
          for (let i = 1; i <= 480; i++) {
            result[i / 4] = `${i / 16}rem`;
          }
          return result;
        })()
      },

      fontSize: {
        ...(() => {
          const result = {};
          for (let i = 12; i <= 160; i++) {
            result[i / 4] = `${i / 16}rem`;
          }
          return result;
        })()
      }
    }
  },
  plugins: []
};