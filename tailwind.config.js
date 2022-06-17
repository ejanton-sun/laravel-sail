module.exports = {
    mode: "jit",
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                sm: "320px",
                md: "769px",
                lg: "1025px",
            },
        },
    },
    plugins: [],
};
