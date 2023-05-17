var wankanan = document.getElementById('awan-kekanan');
var wankiri = document.getElementById('awan-kekiri');
var factory = document.getElementById('factory');
var floor = document.getElementById('floor-trees');
var truck = document.getElementById('truck');
var logo = document.getElementById('logoswipe');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    logo.style.left = value*-2 + 'px';
    truck.style.left = value*1.1 + 'px';
    wankanan.style.left = value*-1.3 + 'px';
    wankiri.style.left = value*1.3 + 'px';
});

var trileft = document.querySelector('.triangle-bg-left');
var trimid = document.querySelector('.triangle-bg-mid');
var triright = document.querySelector('.triangle-bg-right');

window.addEventListener('scroll', () => {
    var value = window.scrollY;

    trileft.style.top = value*0.3 + 'px';
    trimid.style.top = value*0.4 + 'px';
    triright.style.top = value*0.5 + 'px';
});

var drawer = document.querySelector('.profile-drawer');
var navbar = document.querySelector('.navbar');

function openProfile() {
    drawer.classList.add('active');
    navbar.classList.add('active');
}
function closeProfile() {
    drawer.classList.remove('active');
    navbar.classList.remove('active');
}