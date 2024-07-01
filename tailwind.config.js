/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                // 'landing-hero': 'linear-gradient(to bottom, #fff, #ad8e47)',
            },
            colors: {
                'gold': {
                    100: '#f3ecd8',
                    200: '#eadfc4',
                    300: '#e0ceaa',
                    400: '#d6be89',
                    500: '#cbae6c',
                    600: '#ad8e47',
                    700: '#816934',
                    800: '#614f27',
                    900: '#41351a',
                },
            },
        },
    },
    plugins: [],
}

