/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {

        'desktop': { 'max': '3800px' },
        // => @media (max-width: 1279px) { ... }

        'tablet': { 'max': '1023px' },
        // => @media (max-width: 1023px) { ... }

        'x-phone': { 'max': '767px' },
        // => @media (max-width: 767px) { ... }

        'phone': { 'max': '639px' },
        // => @media (max-width: 639px) { ... }
      },
    },
    corePlugins: {
      aspectRatio: false,
    },
    plugins: [
      require('@tailwindcss/aspect-ratio'),
      require("@tailwindcss/forms")({
        // strategy: 'base', // only generate global styles
        // strategy: 'class', // only generate classes
      }),
    ],
  }
}