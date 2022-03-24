module.exports = {
  theme: {
    container: {
      center: true
    },
    fontFamily: {
      'title': ['Outfit', 'sans-serif'],
      'sans': ['Kulim Park', 'sans-serif']
    },
    extend: {
      colors: {
        bee: '#fbae17'
      }
    }
  },
  content: [
    './index.html',
    './src/**/*.{vue,js,ts,jsx,tsx}',
    './node_modules/flowbite/**/*.js'
  ],
  darkMode: 'class',
  plugins: [
    require('flowbite/plugin')
  ]
}
