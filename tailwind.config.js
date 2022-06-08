const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: ["./resources/**/*.blade.php"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "7rem",
        "2xl": "8rem",
      },
    },
    extend: {
      fontFamily: {
        sans: ["Mukta", ...defaultTheme.fontFamily.sans],
      },
      colors: {
        "dodger-blue": {
          DEFAULT: "#197DF1",
          50: "#C6DFFC",
          100: "#B3D4FA",
          200: "#8CBEF8",
          300: "#66A8F6",
          400: "#3F93F3",
          500: "#197DF1",
          600: "#0C62C6",
          700: "#094891",
          800: "#062E5C",
          900: "#021327",
        },
        wisteria: {
          DEFAULT: "#BA66BD",
          50: "#F4E6F4",
          100: "#EDD8EE",
          200: "#E1BCE2",
          300: "#D49FD6",
          400: "#C783C9",
          500: "#BA66BD",
          600: "#A147A4",
          700: "#7A367D",
          800: "#542556",
          900: "#2E142F",
        },
      },
      boxShadow: {
        outline: "0 0 0 5px hsl(0deg 0% 0% / 2%)",
        card: "-1px 2px 10px 0px #0000000F",
      },
    },
  },
  plugins: [],
};
