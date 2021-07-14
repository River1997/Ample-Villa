var btns = document.querySelectorAll('.test')
var contents = document.querySelectorAll('.tab-content')
var first = document.querySelector('.first')
var first_btn =document.querySelector('.first_btn')


for (let index = 0; index < btns.length; index++) {
    btns[index].onclick = function(){
        first.classList.remove('first')
        // first_btn.classList.remove('first_btn')
        ALLCLEAR()
        btns[index].classList.add('active')
        contents[index].classList.add('active')
    }
}

function ALLCLEAR(){
    for (let index = 0; index < btns.length; index++) {
        btns[index].classList.remove('active')
        contents[index].classList.remove('active')

    }
}
