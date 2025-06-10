const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", this.window.scrollY > 80);
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
}; 

const sr = ScrollReveal({
    origin: 'top',
    distance: '85px',
    duration: 2500,
    reset: true
})

sr.reveal ('.home-text',{delay:300});
sr.reveal ('.home-img',{delay:400});
sr.reveal ('.container',{delay:400});

sr.reveal ('.about-img',{});
sr.reveal ('.about-text',{delay:300});

sr.reveal ('.middle-text',{});
sr.reveal ('.arow-btn,.shop-content',{delay:300});

sr.reveal ('.review-content,.contact',{delay:300});
sr.reveal ('.footer-footer',{delay:300});







document.getElementById("showProducts").addEventListener("click", function(event) {
    event.preventDefault(); 
    var extraProducts = document.getElementById("extraProducts");
    if (extraProducts.style.display === "none") {
        extraProducts.style.display = "grid";
    } else {
        extraProducts.style.display = "none";
    }
});
