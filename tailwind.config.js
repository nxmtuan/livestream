module.exports = {
  content: ["./src/**/*.{php,js,html}"],
  theme: {
    extend: {},
    container: {
      center: true,
      padding: "1rem",
      screens: {
        sm: "600px",
        md: "728px",
        lg: "1200px",
        xl: "1312px",
      },
    },
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1025px",
      xl: "1281px",
      "2xl": "1536px",
    },
  },
  plugins: [],
};
