var makanan = document.getElementById("makanan");
var voucher = document.getElementById("pocer");

var namaPesanan = document.getElementById("menu");
var jumlahPesanan = document.getElementById("banyak");
var hargaDiskon = document.getElementById("diskon");
var hargaTotal = document.getElementById("harga");

document.getElementById("buttonSub").addEventListener("click", function () {
    var banyak = parseInt(document.getElementById("jumlah").value);
    var selectedFoodValue = makanan.value;
    var selectedFoodText = makanan.options[makanan.selectedIndex].text;
    var hargaMakan = selectedFoodValue * banyak;
    var pocerdiskon = voucher.value;
    var harga = hargaMakan * banyak;
    
    
    var disc = 0;

    if (pocerdiskon === "ASPRAKLEONGANTENG") {
        disc = hargaMakan * 0.2;
    }

    harga -= disc

    namaPesanan.innerHTML = selectedFoodText;
    jumlahPesanan.innerHTML = banyak;
    hargaDiskon.innerHTML = disc;
    hargaTotal.innerHTML = harga;
});