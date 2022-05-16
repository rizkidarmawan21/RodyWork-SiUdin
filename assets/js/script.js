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



function sendMessage(){
    alert('sendMessage');
    database.ref('siudin').push({
        message: 'siudin',
    })
}
import {database} from 'https://www.gstatic.com/firebasejs/9.8.1/firebase-database.js'