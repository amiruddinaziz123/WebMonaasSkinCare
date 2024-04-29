const inputImage = document.getElementById('file-input');
const previewPhoto = () => {
    const file = inputImage.files;
    var fileName = document.getElementById("file-input").value;
    var idxDot = fileName.lastIndexOf(".") + 1;
    var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
        const fileReader = new FileReader();
        const preview = document.getElementById('file-preview');
        fileReader.onload = function (event) {
            preview.setAttribute('src', event.target.result);
        }
        fileReader.readAsDataURL(file[0]);
    }else{
        alert("Only jpg/jpeg and png files are allowed!");
        inputImage.value = null;
    }
}
inputImage.addEventListener("change", previewPhoto);


const judulInput = document.getElementById('judul');
const navbarBrand = document.getElementById('preview-judul');

judulInput.addEventListener('input', function() {
    navbarBrand.innerHTML = this.value;
});

const backgroundColorInput = document.getElementById('background');
const navbar = document.querySelector('.gantiWarnaBG');

backgroundColorInput.addEventListener('input', function() {
    navbar.style.backgroundColor = this.value;
});