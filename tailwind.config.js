import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    default: "#2b1567",
                },
                "brand-secondary": {
                    default: "#F15C33",
                },
            },
            keyframes: {
                slidein: {
                    "0%": { transform: "translate(200px)" },
                    "100%": { right: "translate(0)" },
                },
            },
            animation: {
                slide: "slidein 0.5s ease-in",
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
