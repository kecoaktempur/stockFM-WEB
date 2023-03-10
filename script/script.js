const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const btnClose = document.querySelector('.icon-close')

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

btnClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});

const kiri = document.getElementById('building-kiri');
const kanan = document.getElementById('building-kanan');
const awan = document.getElementById('awan');
const factory = document.getElementById('factory');
const floor = document.getElementById('floor-trees');
const truck = document.getElementById('truck');
const logo = document.getElementById('logoswipe');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    logo.style.left = value*-3 + 'px';
    truck.style.left = value*3 + 'px';
    awan.style.top = value*-2 + 'px';
    kiri.style.left = value*-2 + 'px';
    kanan.style.left = value*2 + 'px';
});

