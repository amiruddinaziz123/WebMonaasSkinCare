const hariSenin = document.getElementById("senin");
const headHari = document.getElementById("row_hari");
// dokterData = from index.blade.php

let hari = [
    "senin",
    "selasa",
    "rabu",
    "kamis",
    "jumat",
    "sabtu",
    "minggu"
];

let reverseHari = _.reverse(hari);

for (let i = 0; i < reverseHari.length; i++) {

    hariSenin.insertAdjacentHTML("afterend",
    `
    <div class="row bg-transparent">
        <div class="col-1 border-color-pink-1 d-flex align-items-center justify-content-center">
        <table_child>`+ _.upperCase(reverseHari[i]) +`<table_child>
        </div>
        <div class="col-8 border-color-pink-1 d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row">
                <button class="col btn pt-2 pb-2 bg-color-pink-1 m-2 focus-ring py-1">Jam Ke 1</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-pink-1 m-2 focus-ring py-1">Jam Ke 1</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-pink-1 m-2 focus-ring py-1">Jam Ke 1</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-pink-1 m-2 focus-ring py-1">Jam Ke 1</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-pink-1 m-2 focus-ring py-1">Jam Ke 1</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-pink-1 m-2 focus-ring py-1">Jam Ke 1</button>
                <button class="col btn pt-2 pb-2 bg-color-green-1 m-2 focus-ring py-1">Jam Ke 2</button>
                <button class="col btn pt-2 pb-2 bg-color-pink-1 m-2 focus-ring py-1">Jam Ke 1</button>
            </div>
        </div>
        </div>
        <div class="col-3 border-color-pink-1 d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row">
                <button class="col btn m-2 btn-success focus-ring py-1">Tambah</button>
                <button class="col btn m-2 btn-warning focus-ring py-1">Edit</button>
                <button class="col btn m-2 btn-danger focus-ring py-1">Hapus</button>
            </div>
        </div>
        </div>
    </div>
    `
    );

}



