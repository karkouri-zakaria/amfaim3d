/** @type {import('tailwindcss').Config} */
export const content = [
  './src/**/*.{html,js}',
  './index.php'
];
export const theme = {
  extend: {
    colors: {
      'jelly-bean': '#2580a7',
      'mine-shaft': '#272222',
      'nebula': '#c8dcd9',
      'tarawera': '#07344f',
    },
    fontFamily: {
      houstiq: ['Houstiq', 'sans-serif'],
      gilroy: ['Gilroy', 'sans-serif'],
      saira: ['Saira', 'sans-serif'],
      orbitron: ['Orbitron', 'sans-serif'],
    },
  },
};
export const plugins = [
  require('tailwindcss'),
  require('autoprefixer'),
];