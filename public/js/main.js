function setphoto(event){
    var reader = new FileReader();
    reader.onload = function () {
        var pre = document.getElementById("num1");
        pre.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
