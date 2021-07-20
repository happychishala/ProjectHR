const defaultTheme = require('tailwindcss/defaultTheme');


module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {    
        extend: {
            colors:{
                blue:{
                    grey:'#EFF3FF',
                },
                green:{
                    main: '#1BBA6E',
                },
                status:{
                    pending:'#84E8F4',
                    declined:'#F87957',
                    approved:'#1BBA6E',
                }
        },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                body:['Roboto'],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
