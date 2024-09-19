/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./index.html", "./resources/**/**/*.{vue,php,js,ts,jsx,tsx}"],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
