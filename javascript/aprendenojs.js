let text = document.getElementById('text');
let leaf = document.getElementById('leaf');
let montanha1 = document.getElementById('montanha1');
let montanha4 = document.getElementById('montanha4');
let montanha5 = document.getElementById('montanha5');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value * 2.5 + 'px';
    leaf.style.top = value * -1.5 + 'px';
    leaf.style.left = value * 1.5 + 'px';
    montanha5.style.left = value * 1.5 + 'px';
    montanha4.style.left = value * -1.5 + 'px';
    montanha1.style.top = value * 1 + 'px';
});