const plugin = require('tailwindcss/plugin');

module.exports = {
    purge: [
        "./resources/**/*.html",
        "./resources/**/*.vue",
        "./resources/**/*.blade.php",
        "./resources/js/Usher.js",
    ],
    mode: 'jit',
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                'black': '#22292f',
                'purple': '#5d2b46',
                'purple-soft': '#902343',
                'hover-purple': '#902343',
                'navy': '#22323f',
                'off-white': '#f7f4f2',
                'pinky-grey': '#eceaed',
                'green-main': '#084137',
                'hover-green': '#346c62',
                'green-soft': '#daede7',
                'green-softest': '#f4f9f7',
                'green-mid': '#abd5c7',
                'ivory': '#FDFDFA',
                'trans-ivory': 'rgba(253,253,253,0)',
                'cream-dark': '#d7c7ba',
                'cream-light': '#fef4f2',
                'brown-dark': '#917661',
                'chocolate': '#554539',
                'brown-light': '#eac49f',
                'gold': '#e49e2a',
                'opaque': 'rgba(254,244,242,.9)',

                'warning': '#cc1f1a',
            },
            spacing: {
                '5/6': '83.33%',
            },

            minHeight: {
                '50w': '50vw',
                '120w': '120vw',
            },
            fontSize: {
                "lg" : '1.25rem',
                '3xl': '3rem',
                '4xl': '2.125rem',
                '5xl': '3rem',
                '6xl': '3.5rem',
                '7xl': '4rem',
            },
            fontFamily: {
                display: [
                    'Noto Sans TC',
                    'atrament-web',
                    'system-ui',
                    'BlinkMacSystemFont',
                    '-apple-system',
                    'Segoe UI',
                    'Roboto',
                    'Oxygen',
                    'Ubuntu',
                    'Cantarell',
                    'Fira Sans',
                    'Droid Sans',
                    'Helvetica Neue',
                    'sans-serif',
                ],
                'sans': [
                    'Noto Sans TC',
                    'transat-bold',
                    'system-ui',
                    'BlinkMacSystemFont',
                    '-apple-system',
                    'Segoe UI',
                    'Roboto',
                    'Oxygen',
                    'Ubuntu',
                    'Cantarell',
                    'Fira Sans',
                    'Droid Sans',
                    'Helvetica Neue',
                    'sans-serif',
                ],
                serif: [
                    'Noto Serif TC',
                    'bodoni-urw',
                    'Constantia',
                    'Lucida',
                    'Lucida Bright',
                    'Lucidabright',
                    'Lucida Serif',
                    'DejaVu Serif',
                    'Bitstream Vera Serif',
                    'Liberation Serif',
                    'Georgia',
                    'serif',
                ],
            },
            inset: {
                '20': '5rem',
                '50': '50%',
            }
        },
    },
    variants: {
        extend: {
            fontSize: ['zh'],
            transform: ['hover', 'group-hover'],
            translate: ['group-hover'],
        },
    },
    plugins: [
        plugin(function ({addVariant, e}) {
            addVariant('zh', ({modifySelectors, separator}) => {
                modifySelectors(({className}) => {
                    return `html:lang(zh) .${e(`zh${separator}${className}`)}`
                })
            })
        })
    ],
}
