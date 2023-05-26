let signUpAlreadyShowed = false

const HomeArea = document.querySelector(".HomeArea");

HomeArea.addEventListener('scroll', () => {
    if( ! signUpAlreadyShowed ) {
        setTimeout( () => {
        document.getElementById('SignUp').style.display = 'block'
        }, 100 )
        signUpAlreadyShowed = true
    }
});

document.getElementById('SignUpClose').addEventListener('click', () => {
    document.getElementById('SignUp').style.display = 'none'
})