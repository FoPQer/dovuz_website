/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        fontFamily: {
            'rubik': ['Rubik', 'sans-serif'],
            'pt_sans': ['PT Sans', 'sans-serif']
        },
        extend: {
            colors: {
                white2: '#FDFBED',
                light_yellow: '#F7F4BC',
                yellow: '#F7EB3A',
                dark_yellow: '#FCD422',
                orange: '#EF7730',
                pink: '#E83942',
                dark_red: '#84171E',
                purple: '#3F1A44',
                black: '#343434',
                grey: '#C1C1C1',
                background: '#EEEEEE',
            }
        },
        minHeight: {
            '208': '208px'
        },
        minWidth: {
            '14': '56px'
        }
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
