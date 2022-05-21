module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    
    extend: {
      fontFamily: {
        'poppins': ["'Poppins'", "'sans-serif'"]
      },
      colors: {
        'black-main' : '#37392E',
        'primary-main' : '#19647E',
        'sec-primary' : '#28AFB0',
        'grey-main' : '#DDCECD'
      },
      spacing: {
        '106': '28rem',
        '128': '32rem',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
  ],
}
