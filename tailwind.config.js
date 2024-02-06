const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './*/*.php',
            './**/*.php',
            './resources/css/*.css',
            './resources/js/*.js',
            './safelist.txt'
        ],
    },
    theme: {
        fontFamily: {
            'sans': ['Helvetica', 'Ariel', 'sans-serif'],
        },
        container: {
            padding: {
                DEFAULT: '1.25rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            fontFamily: {
                'Monoton': ['Monoton', 'Ariel'],
                'Lato': ['Lato', 'Ariel'],
            },
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme))
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': tailpress.theme('settings.layout.wideSize', theme)
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
