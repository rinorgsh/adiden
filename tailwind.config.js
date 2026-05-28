import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'adiden': {
                    DEFAULT: '#1D3559',
                    'darker': '#15263F',
                    'dark': '#1D3559',
                    'light': '#2C4C7D',
                    'lighter': '#3D5F92',
                    'blue-dark': '#1e3a8a',
                    'blue-light': '#3b82f6',
                    'gray-light': '#f8fafc',
                },
            },
        },
    },

    plugins: [forms],
};
