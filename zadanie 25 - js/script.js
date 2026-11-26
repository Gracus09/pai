function dodaj() {
    let pole = document.getElementById("produkt");
    let tekst = pole.value.trim();
    if(tekst == "") {
    return;
    }
    let lista = document.getElementById("lista");
    let element = document.createElement("li");
    element.textContent = pole.value;
    lista.appendChild(element);
    pole.value = ""

}