module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var'],
      },
    }
  },
  variants: {
    height: ['responsive', 'hover', 'focus'],
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
    require('@tailwindcss/ui'),
  ]
}
