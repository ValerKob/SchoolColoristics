let burger = document.getElementById('burger');
let wrapperBurger = document.getElementById('wrapperBurger');

burger.addEventListener('click', () => {
    burger.classList.toggle('active')
    wrapperBurger.classList.toggle('active')
})

let closeBurger = document.getElementById('close');

closeBurger.addEventListener('click', () => {
    burger.classList.toggle('active')
    wrapperBurger.classList.toggle('active')
})