const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {

            colors: {
                primary: {
                  light: "#fefcbf", // For lighter primary color
                  DEFAULT: "#b7791f", // Normal primary color
                  dark: "#744210", // Used for hover, active, etc.
                        },
                    },
            screens: {
                'print': {'raw': 'print'},
                // => @media print { ... }
              },
              
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui','kutty')],
};
