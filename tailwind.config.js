const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        fontFamily: {
            primary: 'Nunito',
            body: "work Sans"
        },
        container: {
            padding: {
                DEFAULT: "1rem",
                lg: "3rem"
            },
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "light-primary": "#2B3A55",
                "light-secondary": "#CE7777",
                "light-tail-100": "#E8C4C4",
                "light-tail-500": "#F2E5E5",
                "dark-primary": "#000000",
                "dark-secondary": "#282A3A",
                "dark-navy-100": "#735F32",
                "dark-navy-500": "#C69749",
                accent: {
                    DEFAULT: "#ac6b34",
                    hover: "#925a2b"
                },
                paragraph: "#878e99",
                blue: colors.blue,
                indigo: colors.indigo,
                green: colors.green,
                red: colors.red,
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
