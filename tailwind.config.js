const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    varians: {
        opacity: ['responsive', 'hover', 'focus', 'disabled']
    },
    corePlugins: {
        container: false,
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
