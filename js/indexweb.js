const navSlide = () => {
    const menu = document.querySelector('.menu');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    menu.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
    });

    navLinks.forEach((link, index) => {
     link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s`;
    });
}

navSlide();


let span = document.getElementsByTagName('span');
let product = document.getElementsByClassName('product');
let product_page = Math.ceil(product.length/5);
let l = 0;
let movePer = 25.34;
let maxMove = 203;

let mobile_view = window.matchMedia("(max-width:768)");
if (mobile_view.matches){
    movePer = 50.36;
    maxMove = 504;
}

let right_mover = ()=>{
    l = l + movePer;
    if (product == 1) {l = 0}
    for(const i of product){
        
        if(l > maxMove) {l = l - movePer;}
        i.style.left = '-' + l + '%';
    }
}

let left_mover = ()=>{
    l = l - movePer;
    if (l<=0) {l=0;}
    for(const i of product){
        if (product_page > 1)
        i.style.left = '-' + l + '%';
    }
}

span[1].onclick = () =>{right_mover();}
span[0].onclick = () =>{left_mover();}




	


