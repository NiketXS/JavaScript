
let liczba1 = Number(prompt("Podaj pierwszą liczbę"));
let liczba2 = Number(prompt("Podaj drugą liczbę"));
let operacja = prompt("Podaj operacje jaką chcesz wykonać: + - * /");
let wynik; 

switch (operacja) {
    case "+":
        wynik = liczba1 + liczba2;
        break;
    case "-":
        wynik = liczba1 - liczba2;
        break;
    case "*":
        wynik = liczba1 * liczba2;
        break;
    case "/":
        wynik = liczba2 !== 0 ? liczba1 / liczba2 : "Błąd: dzielenie przez zero!";
        break;
    default:
        wynik = "Nieznana operacja!";
}

document.writeln("Wynik = " + wynik);

