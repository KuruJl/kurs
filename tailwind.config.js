import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors:
            {
                darkBlue: '#011F41',
                lightBlue: '#0077FF',
                pinkk: '#FFDCEA',
                Wblue: '#002550',
                white: '#FFFFFF',

            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            margin: { '260': '260px', '575': '575px', '43': '43px', '351': '351px', '39': '39px', '100': '100px',

                 '260': '260px', '220': '220px', '50': '50px', '56': '56px', '85': '85px', '52': '52px', '15': '15px',

                  '7': '7px', '67': '67px', '54': '54px', '114': '114px','77': '77px','58': '58px','40': '40px','90': '90px','20': '20px',

                  '33': '33px','20': '20px','47': '47px','80': '80px','64': '64px','122': '122px','71': '71px','24': '24px','140': '140px','1000': '1000px','291': '291px', },

            fontSize: {
                smm: ['20px'],
                sm: ['22px'],
                base: ['16px', '24px'],
                lg: ['30px'],
                xl: ['24px', '32px'],
                xxl: ['64px'],

            },

            fontFamily: { custom: ['Rubik', 'sans-serif'], },

            opacity: { '20': '0.2', '90': '0.9', },

            spacing: {
                '300': '300px', '1320': '1320px', '63': '63px', '960': '960px',
                '64': '64px', '16': '16px', '180': '180px', '59': '59px', '85': '85px',
                '1120': '1120px', '20': '20px', '64': '64px', '390': '390px', '75': '75px',
                '50': '50px', '77': '77px', '45': '45px', '85': '85px', '52': '52px', '220': '220px', '50': '50px','305': '305px','84': '84px','848': '848px','120': '120px','400': '400px','80': '80px',
            }
        },
    },
    plugins: [],
};
