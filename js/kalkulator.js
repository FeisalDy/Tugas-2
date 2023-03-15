function tambah(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2;
    if(frm.angka.value == "" || frm.angka2.value == ""){
        alert("Maaf angka belum terisi");
    }else{
        frm.hasil.value = total;
    }
}

function kurang(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 - a2;
    if(frm.angka.value == "" || frm.angka2.value == ""){
        alert("Maaf angka belum terisi");
    }else{
        frm.hasil.value = total;
    }
}

function kali(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 * a2;
    if(frm.angka.value == "" || frm.angka2.value == ""){
        alert("Maaf angka belum terisi");
    }else{
        frm.hasil.value = total;
    }
}

function bagi(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 / a2;
    if(frm.angka.value == "" || frm.angka2.value == ""){
        alert("Maaf angka belum terisi");
    }else{
        frm.hasil.value = total;
    }
}

function pangkat(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = Math.pow(a1, a2);
    if(frm.angka.value == "" || frm.angka2.value == ""){
        alert("Maaf angka belum terisi");
    }else{
        frm.hasil.value = total;
    }
}

/*tugas ke 4 Javascript
1. Lengkapilah form dari latihan 15js menggunakan CSS dan table 
2. Perbagus tampilannya 
3. Lengkapi perhitungannya dengan:
- pembagian
- perkalian
- pangkat
4. jika form input dari angka 1 dan 2 kosong dan user klik button, 
maka tampilkan "Maaf angka belum terisi"


*/