/** @type {import('tailwindcss').Config} */
export const content = [
  './src/**/*.{html,js}',
  './index.php'
];
export const theme = {
  extend: {
    colors: {
      'jelly-bean': '#2580a7',
      'shaft': '#07344f',
      'nebula': '#c8dcd9',
      'tarawera': '#004982',
      'peach': '#fceeda',
      'fun': '#1a599f',
      'slight': "#2596be",
      "blight": '#c7dcd9',
      'default': "#2596be"
    },
    fontFamily: {
      oswald: ['Oswald', 'sans-serif'],      
    },
  },
};
export const plugins = [
  require('tailwindcss'),
  require('autoprefixer'),
];