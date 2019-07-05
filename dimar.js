//Membuat Logo Copyright
document.getElementById("akhir").innerHTML = "&copy Copyright By Hafidhin";

//Untuk memvalidasi agar semua data diisi supaya bisa daftar
function validasi() {
		var nama = document.getElementById("nama").value;
		var nim = document.getElementById("nim").value;
		var email = document.getElementById("email").value;
		var alamat = document.getElementById("alamat").value;
		if (nama != "" && nim != "" && email!="" && alamat !="") {
			return true;
		}else{
			alert('Semua data harus diisi jika tidak data akan kosong 	!');
		}
	}

//Menampilkan Jam
window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}