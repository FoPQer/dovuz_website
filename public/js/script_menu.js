let navigation = document.getElementById('nav');
let menuIcon = document.getElementById('icon');
let sideBar = document.getElementById('side_bar');
menuIcon.onclick = function (){navigation.classList.toggle('active'); sideBar.classList.toggle('active')}

let dropdown_button = document.getElementById('dropdown');
dropdown_button.onclick = function () {
    dropdown_button.classList.toggle('rotate');
}

console.log(sideBar);
