const spaceForBottom = document.getElementById("spaceForBottom");
const hasil = document.querySelector(".hasil");

const tinggiHasil = getComputedStyle(hasil);
const kurangiKetinggian = (tinggiHasil.height.slice(0, 2) - 20) + "px";

spaceForBottom.style.height = kurangiKetinggian;

const garis = document.querySelector(".garis");

if (screen.innerWidth <= 600) {
    garis.style.display = "none";
}else{
    garis.style.display = "block";
}