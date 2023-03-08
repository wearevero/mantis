const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],

    theme: {
        extend: {
            fontFamily: {
                    sans: ["Nunito"],
                    display: "BasementGrotesque-Display, sans serif",
                    basement: "BasementGrotesque-Black, sans serif",
                    montreal: "Neue-Montreal-Regular-400, sans-serif",
                    space: "SpaceMono-Regular, serif",
                    silkBold: "Silk-Bold, serif",
                },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
