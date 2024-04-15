import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

        "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/View/**/*.php",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/resources/**/*.blade.php",

        "./src/**/*.{js,jsx,ts,tsx}",
        "./public/index.html",
    ],

    theme: {
        extend: {
            backgroundColor: ['light'],
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'primary': colors.teal,
                'secondary': colors.sky,
                
            },
            fontSize: {
                xs: ['12px', '16px'],
                sm: ['18px', '20px'],
                base: ['25px', '27px'],
                lg: ['32px', '36px'],
                xl: ['28px', '30px'],
                '2xl': ['32px', '29.26px'],
                '3xl': ['28px', '50px'],
                '4xl': ['39px', '45px'],
                '5xl': ['57px', '60px'],
                '8xl': ['96px', '106px'],
            }
        },
    },

    darkMode: 'class',
    plugins: [forms, typography],
};
