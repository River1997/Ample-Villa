AOS.init();

var b = document.querySelector('.three-line')
var a = document.querySelector('#burger-menu')

function adv() {
    if (a.checked) {
        b.src = "./img/nav-x.png"
    } else {
        b.src = "./img/nav-barger.png"
    }
}
a.addEventListener('change', adv)
