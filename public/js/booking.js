const hariSenin = document.getElementById("senin");
const headHari = document.getElementById("row_hari");
// dokterData = from index.blade.php

const hari = [
    "senin",
    "selasa",
    "rabu",
    "kamis",
    "jumat",
    "sabtu",
    "minggu"
];
let hariUrut = _.reverse(hari);

for (let i = 0; i < hari.length; i++) {
    headHari.insertAdjacentHTML("afterend", `<th id='${hariUrut[i]}'>${_.upperFirst(hariUrut[i])}</th>`);
}

let dokterSenin = [];
console.log(dokterData);
for (let i = 0; i < dokterData.length; i++) {
    hariSenin.insertAdjacentHTML("afterend", "<td>" + dokterData[i].nama_dokter + "</td>");
}

// Mendapatkan referensi tabel
var table = document.getElementById("table");
// Menghitung jumlah kolom maksimum dalam tabel
var maxCols = 0;
for (var i = 0, row; row = table.rows[i]; i++) {
    maxCols = Math.max(maxCols, row.cells.length);
}
// Menetapkan atribut colspan untuk setiap sel di baris terakhir
var lastRow = table.rows[table.rows.length - 1];
for (var i = 0; i < lastRow.cells.length; i++) {
    lastRow.cells[i].colSpan = maxCols - lastRow.cells.length + 1;
}
