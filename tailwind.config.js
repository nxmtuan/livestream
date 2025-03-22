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
        matchBorderScoreGradient:
          "linear-gradient(to right, #FFB032, #FDCD8B, #A36013)",
        matchBgScoreGradient: "linear-gradient(to right, #F15E23, #FF9266)",
        timeCountdownGradient: "linear-gradient(to bottom, #666666, #3D3C3C)",
        adCardGradient:
          "linear-gradient(to right, #F35B09, #FFC7A9, #FA6413, #FFC19F, #FB6514)",
        chatCardGradient:
          "linear-gradient(to right, #F9E764, #F69138, #FF620E)",
        buttonGradient:
          "linear-gradient(to bottom, #FFAC80, #FE6B1D, #FF8A66, #FB6515)",
        angularGradient: "conic-gradient(#5C5A5A, #3C3B3B)",
        radialGradien: "radial-gradient(circle, #000000 0%, #616060 100%)",
        submitBtn: "linear-gradient(to right, #F16D21, #FAAA7D)",
      },
    },
    fontFamily: {
      body: ["Roboto"],
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
