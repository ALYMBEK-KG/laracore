/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                light: {
                    DEFAULT: colors.white,
                    darker: colors.gray[100],
                    darkest: colors.gray[200],
                },
                dark: {
                    DEFAULT: colors.gray[900],
                    lighter: colors.gray[800],
                    lightest: colors.gray[700],
                },
                secondary: {
                    DEFAULT: colors.gray[500],
                    lighter: colors.gray[400],
                    darker: colors.gray[600],
                },
                primary: {
                    DEFAULT: colors.indigo[500],
                    lighter: colors.indigo[400],
                    darker: colors.indigo[600],
                },
                success: {
                    DEFAULT: colors.emerald[500],
                    lighter: colors.emerald[400],
                    darker: colors.emerald[600],
                },
                danger: {
                    DEFAULT: colors.red[500],
                    lighter: colors.red[400],
                    darker: colors.red[600],
                },
                warning: {
                    DEFAULT: colors.yellow[500],
                    lighter: colors.yellow[400],
                    darker: colors.yellow[600],
                },
                info: {
                    DEFAULT: colors.blue[500],
                    lighter: colors.blue[400],
                    darker: colors.blue[600],
                },
            },
        },
    },

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
