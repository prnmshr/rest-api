//Object jadi json

// let mahasiswa ={
//     nama : "Purnama Ashari",
//     nim : "H1101211065",
//     email : "h1101211065@student.untan.ac.id"
// }

// console.log(JSON.stringify(mahasiswa));

//JSON jadi object

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         // let mahasiswa = this.responseText;
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

//pake jquery
$.getJSON('coba.json', function(data) {
    console.log(data);

});
