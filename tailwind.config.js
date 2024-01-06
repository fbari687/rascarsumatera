/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "main-green": "#1F9F2E",
                "main-white": "#FFFFFF",
                "main-yellow": "#FFDF0F",
                "main-black": "#1E1E1E",
                "sec-black": "#474747",
                "sec-white": "#F1F1F1",
                "sec-green": "#C7E7CA",
                "third-white": "#D9D9D9",
                "fourth-white": "#BCBCBC",
                overlay: "rgba(0,0,0,0.4)",
                "transparent-hover": "rgba(0,0,0,0.075)",
            },
            fontFamily: {
                openSans: "Open Sans",
            },
            boxShadow: {
                shadowBold: "1.5px 2px 10px 0px rgba(17, 17, 17, 0.25);",
                shadowLight: "1.5px 2px 10px 0px rgba(0, 0, 0, 0.10);",
                shadowCard:
                    "1.5px 2px 10px 0px rgba(0, 0, 0, 0.10), 0px 3px 6px 0px rgba(0, 0, 0, 0.10)",
            },
            dropShadow: {
                navbar: "0px 2px 30px rgba(0, 0, 0, 0.25)",
            },
        },
    },
    plugins: [require("@tailwindcss/typography"), require("preline/plugin")],
};
