const aysun_lines = document.querySelector('.mob-cross');
const aysun_nav = document.querySelector('nav');

aysun_lines.addEventListener("click", ()=>{
    aysun_nav.classList.toggle('open');
});

aysun_lines.addEventListener("keydown", function(event) {
    if (event.key === "Enter" || event.keyCode === 13) {
        aysun_nav.classList.toggle('open');
    }
});

aysun_lines.addEventListener("focus", function(event) {
    aysun_nav.classList.toggle('open');
});

