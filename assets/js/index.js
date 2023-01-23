/* LINK ACTIVE */
const list = document.querySelectorAll('.list');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>
item.addEventListener('click', activeLink));

/* BTN BACK TO TOP */
btnTop = document.getElementById('btnToTop')

window.onscroll = function (){
    scrollFunction()
}

function scrollFunction (){
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400){
        btnTop.style.display = 'block';
    } else {
        btnTop.style.display = 'none';
    }
}

function topFunction (){
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
} 
