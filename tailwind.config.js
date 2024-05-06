/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "selector",
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        steel: "#404040",
        water: "#3b82f6",
        bug: "#84cc16",
        dragon: "#6366f1",
        electric: "#eab308",
        ghost: "#8b5cf6",
        fire: "#f97316",
        fairy: "#ec4899",
        ice: "#06b6d4",
        fighting: "#dc2626",
        normal: "#737373",
        grass: "#22c55e",
        psychic: "#db2777",
        rock: "#a16207",
        dark: "#64748b",
        ground: "#f59e0b",
        poison: "#d946ef",
        flying: "#a855f7",
      },
    },
  },
  plugins: [require("daisyui")],

  daisyui: {
    themes: false,
    base: false,
    styled: true,
  },
};
