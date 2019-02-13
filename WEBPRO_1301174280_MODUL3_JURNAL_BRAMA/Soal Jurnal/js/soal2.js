function validasi() {
	var nama = document.getElementById("nama").value;
	var email = document.getElementById("email").value;
	var alamat = document.getElementById("alamat").value;
	if(nama == '' || alamat == ''|| email==''){
		alert("anda harus mengisi data dengan lengkap");
	}
	else{
		alert("Halo "+ nama + " Selamat datang!");
	}
}
function changeBackground(){
	document.body.style.background = "url('image.jpg')";
}
function changeFont(){
	document.getElementById("telkom").style.fontFamily = "Algerian";
}
function changeFontSize(){
	document.getElementById("telkom").style.fontSize = "20";
}
function changeFontColor(){
	document.getElementById("telkom").style.color = "green";
}
function hapus(){
	document.getElementById("telkom").innerHTML = "";
}