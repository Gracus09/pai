function generuj() {
    let n = document.getElementById("n").value;
    if(n <= 0 || n > 10) {
     div.textContent = "Podaj liczbę od 1 do 10";
     return;
    }
    let div = document.getElementById("tabela");
    let tabela = document.createElement("table");
   for(let i = 1; i <= n; i++) {
    let wiersz = document.createElement("tr");
    for(let j = 1; j <= n; j++) {
        let komorka = document.createElement("td");
        komorka.textContent = (i * j);
        if(i === j) {
            komorka.style.backgroundColor = "lightblue";
        }
        wiersz.appendChild(komorka);
    }
    tabela.appendChild(wiersz);
}
div.appendChild(tabela);
}