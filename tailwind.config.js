/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './inc/**/*.php',
    './js/**/*.js',
    './src/**/*.js',
    './src/**/*.css',
    './**/*.php',
    './src/input/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'primary': {
          500: '#B68C5A',
          600: '#96714A'
        },
        'bg-color': '#FDF7F2',
        'text-color': '252525',
        'secondary': {
          50: '#fdf7ed',
          100: '#f9e7cc',
          200: '#f2cc95',
          300: '#ebad5e',
          400: '#e69339',
          500: '#df7527',
          600: '#c4531b',
          700: '#a3391a',
          800: '#852d1b',
          900: '#6e2719',
          950: '#3f1109'
        },
        'dark': '#1B1B1B',
        'body': '#666666',
        'body-dark': '#cccccc',
      },
      fontFamily: {
        'jost': ['Jost', 'sans-serif'],
        'dm-sans': ['DM Sans', 'sans-serif'],
      },
      fontSize: {
        'base': ['16px', '1.8'],
        'lg': ['18px', '1.6'],
        'xl': ['20px', '1.5'],
        '2xl': ['24px', '1.4'],
        '3xl': ['30px', '1.3'],
        '4xl': ['36px', '1.3'],
        '5xl': ['48px', '1.2'],
        '6xl': ['60px', '1.1'],
        '4th-heading': 'clamp(1.375rem, 1.3138rem + 0.3061vw, 1.5625rem)',
        '3rd-heading': 'clamp(1.375rem, 1.2083rem + 0.8333vw, 1.875rem)',
        '2nd-heading': 'clamp(1.5625rem, 1.1801rem + 1.912vw, 2.8125rem)',
        'hero-heading': 'clamp(2.1875rem, 1.7708rem + 2.0833vw, 3.4375rem)',
      },
      spacing: {
        '15': '3.75rem',
      },
      zIndex: {
        '1001': '1001',
      }
    },
    container: {
      center: true,
      padding: '1rem',
      screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
      }
    },
  },
  plugins: [
    //require('@tailwindcss/typography'),
  ],
}