const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pri: '#1e1e1e',
                sec: '#292929',
                ter: '#171717',
                accent: '#6366F1',
                't-pri': '#f5f5f5',
                't-sec': '#9c9c9c',
                't-ter': '#717171',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
