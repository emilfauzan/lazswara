const defaultTheme = require('tailwindcss/defaultTheme')
const plugin = require('tailwindcss/plugin');
const rtl = require('tailwindcss-rtl'); // Arabic fonts

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
                arabic: ['Amiri', 'sans-serif'], // Add custom Arabic font
            },
            colors: {
                primary: '#4CAF50', // Example color for primary
                secondary: '#FFC107', // Example color for secondary
            },
        },
    },
    plugins: [
        rtl, // Add RTL plugin
        plugin(function ({ addUtilities }) {
            addUtilities({
                '.text-ar': {
                    direction: 'rtl',
                    'text-align': 'right',
                },
                '.text-en': {
                    direction: 'ltr',
                    'text-align': 'left',
                },
            });
        }),
    ],
};
