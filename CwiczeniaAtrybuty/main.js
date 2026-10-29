//WYSZUKIWANIE ZNACZNIKA INPUT I PRZYPISANIE GO DO ZMIENNEJ INPUT
let input = document.querySelector('input');

//USTAWIANIE INPUTA NA RODZAJ PASSWORD
input.setAttribute('type','password');

//USTAWIA SZCZEROKOŚĆ OBRAZKA NA 500
let img = document.querySelector('img');
img.setAttribute('width','500')

//ZMIANA ZAWARTOŚCI NAGŁÓWKA NA NOWĄ WARTOŚĆ
let h1 = document.querySelector('h1');
h1.innerHTML = "nowy nagłówek"