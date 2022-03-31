module.exports = {
  future: {
	removeDeprecatedGapUtilities: true,
	purgeLayersByDefault: true
  },
  purge: [
	  "../**.php",
	  "../**/**.php",
	  "./src/js/**.js"
  ],
  theme: {
    screens: {
      'sm': '568px',
      // => @media (min-width: 568px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'desktop': '769px',
      // => @media (min-width: 769px) { ... } Covers Mobile & Ipad

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: '#000000',
      white: '#ffffff',
      error: '#eb5757',
      success: '#70d81f',

      grey: {
        dark: '#C3C3C3',
        default: '#E9E9E9',
        light: '#F4F4F5',
      },

      'blue': '#253149',
      'blue-light': '#44526C',
    },
    fontFamily: {
      sans: [
        'chevin-pro',
        'ui-sans-serif',
        'system-ui',
        '-apple-system',
        'BlinkMacSystemFont',
        '"Segoe UI"',
        'Roboto',
        '"Helvetica Neue"',
        'Arial',
        '"Noto Sans"',
        'sans-serif',
        '"Apple Color Emoji"',
        '"Segoe UI Emoji"',
        '"Segoe UI Symbol"',
        '"Noto Color Emoji"',
      ],
      serif: ['ui-serif', 'Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
      mono: [
        'ui-monospace',
        'SFMono-Regular',
        'Menlo',
        'Monaco',
        'Consolas',
        '"Liberation Mono"',
        '"Courier New"',
        'monospace',
      ],
    },
    fontSize: {
      xs: '0.75rem',
      sm: '0.875rem',
      base: '1rem',
      lg: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '4-5xl': '2.5rem',
      '5xl': '3rem',
      '6xl': '4rem',
      '7xl': '4.5rem'
    },
    extend: {
      spacing: {
        '16:9': '56.25%',
        '4:3': '75%',
        '3:2': '66.66666%',
        '1:1': '100%',
        '5:9': '180%',
        '550:384': '143.22916%',
      },
      maxHeight: {
        '0': '0',
        '600': '600px'
      },

    },
    customForms: theme => ({
      default: {
        input: {
          backgroundColor: theme('colors.white')
        },
        textarea: {
          backgroundColor: theme('colors.white')
        }
      }
    })
  },
  variants: {
    display: ['responsive', 'group-hover'],
    backgroundColor: ['responsive', 'hover', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
  },
  corePlugins: {
    container: false,
  },

  plugins: [
    require('@tailwindcss/custom-forms'),
    require('@tailwindcss/aspect-ratio'),
  ]
}
