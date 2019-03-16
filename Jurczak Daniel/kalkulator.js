


   
function aktualizuj() {
    var cena = document.getElementById('cena');
    var ilosc = document.getElementById('ilosc');
    var koszt = document.getElementById('koszt');
    var wycieczka = document.getElementById('wycieczka');
    var cena_kwota = document.getElementById('c_'+wycieczka.value);
    cena.value = cena_kwota.innerText;
    koszt.value = parseInt(cena.value) * ilosc.value;
}
function aktualizuj2() {
    var cena = document.getElementById('cena');
    var ilosc = document.getElementById('ilosc');
    var koszt = document.getElementById('koszt');
    var wycieczka = document.getElementById('wycieczka');
    var cena_kwota = document.getElementById('c_'+wycieczka.value);
    cena.value = cena_kwota.innerText;
    koszt.value = parseInt(cena.value) * ilosc.value;
}