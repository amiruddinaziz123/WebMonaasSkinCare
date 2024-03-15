const hariSenin = document.getElementById("senin");

let dokterSenin = [
    "Dokter A",
    "Dokter B",
    "Dokter C",
    "Dokter D",
    "Dokter E",
    "Dokter F"
];

for (let i = 0; i < dokterSenin.length; i++) {
    hariSenin.insertAdjacentHTML("afterend", "<td>" + dokterSenin[i] + "</td>");
}

console.log(dokterData);


