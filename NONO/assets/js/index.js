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
