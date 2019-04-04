
function sprawdz() {
    var miejscowosc = document.getElementById('miejscowosc').value;
    var ilosc_dni = parseInt(document.getElementById('ilosc_dni').value);
    var transport = document.getElementById('transport').value;
    var koszt = document.getElementById('koszt').value;
    var span = document.getElementById('skrypt');
    
    if (miejscowosc=='puste' || isNaN(ilosc_dni) || transport=='puste' || isNaN(koszt) ){
        span.innerHTML = 'UZUPELNIJ WSZYSTKIE DANE';
        return false;
    }
    else {
        span.innerHTML = '';
        return true;
    }
}