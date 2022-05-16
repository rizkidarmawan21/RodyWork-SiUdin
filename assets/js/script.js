tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                robotoFlex: ['Roboto Flex', 'sans-serif'],
            },
            spacing: {
                13: '3.25rem',
            },
            animation: {
                'spin-slow': 'spin 3s linear infinite',
                'goyang': 'goyang 1s ease-in-out infinite',
            },
            keyframes: {
                goyang: {
                    '0%,100%': {
                        transform: 'rotate(-3deg)'
                    },
                    '50%': {
                        transform: 'rotate(3deg)'
                    },
                }
            }
        }
    }
}
