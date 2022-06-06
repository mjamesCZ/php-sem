const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: ["./resources/**/*.blade.php"],
  theme: {
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
      },
    },
  },
  plugins: [],
};
