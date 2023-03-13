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

const wankanan = document.getElementById('awan-kekanan');
const wankiri = document.getElementById('awan-kekiri');
const factory = document.getElementById('factory');
const floor = document.getElementById('floor-trees');
const truck = document.getElementById('truck');
const logo = document.getElementById('logoswipe');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    logo.style.left = value*-2 + 'px';
    truck.style.left = value*1.1 + 'px';
    wankanan.style.left = value*-1.3 + 'px';
    wankiri.style.left = value*1.3 + 'px';
});

const trileft = document.getElementById('triangle-bg-left');
const trimid = document.getElementById('triangle-bg-mid');
const triright = document.getElementById('triangle-bg-right');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    trileft.style.top = value*0.3 + 'px';
    trimid.style.top = value*0.4 + 'px';
    triright.style.top = value*0.5 + 'px';
});

