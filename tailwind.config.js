module.exports = {
  content: ["./src/**/*.{php,js,html}"],
  theme: {
    extend: {
      backgroundImage: {
        borderCardGradient:
          "linear-gradient(to right, #F15E23, #FFB89C, #F15E23, #FFC2AA, #F15E23)",
        timeBorderCardGradient: "linear-gradient(to right, #FC5D1D, #B03807)",
        timeCardGradient: "linear-gradient(to right, #000000, #666666)",
        rateGradient: "linear-gradient(to bottom, #454343CC, #696767CC)",
        inMatchGradient: "linear-gradient(to right, #37B349, #FC9504)",
        scoreGradient: "linear-gradient(to right, #000000CC, #666666CC)",
        btnGradient: "linear-gradient(to right, #F45515, #FF7037, #F96022)",
      },
    },
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
