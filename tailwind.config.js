/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                losta: ["LostaMasta", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                primary: "#12372A",
                secondary: "#F0FFFA",
                accent: "#60BC9D",
                softPrimary: "#60BC9D",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
