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
            backgroundImage:theme =>({
                'safe-data': "url('/assets/images/safe-data.jpg')",
                'leave': "url('/assets/images/leave.jpg')",
                'schedule': "url('/assets/images/schedule.jpg')",
                'about': "url('/assets/images/about.jpg')",
                'placeholder': "url('/assets/images/placeholder.jpg')"
            }),
            colors:{
                blue:{
                    grey:'#EFF3FF',
                },
                letter:{
                    grey:'#3D3B44',
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
                alt:['Josefin Sans'],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'),require('tailwind-scrollbar')],
};
