window.onscroll = function() {myFunction()};

var nav = document.getElementById("nav");
var sticky = nav.offsetTop;

function myFunction() {
	if (window.pageYOffset >= sticky) {
  		nav.classList.add("sticky")
  	} else {
    	nav.classList.remove("sticky");
  	}
}

function active(index) {
	var element = document.getElementsByClassName("right");
	element[index].classList.add("active");
}

function showformpinjam() {
	$('#tambah-peminjaman').show();
}

function hideformpinjam() {
	$('#tambah-peminjaman').hide();
}


//FUNCTION untuk NAVIGASI
function laporan(){
	$('#laporan').addClass('white').css({"color":"black"});
	$('#data').addClass('none');
	$('#pengembalian').addClass('none');
	$('#perpanjangan').addClass('none');
	$('#peminjaman').addClass('none');
}

function data(){
	$('#laporan').addClass('none');
	$('#data').addClass('white').css({"color":"black"});
	$('#pengembalian').addClass('none');
	$('#perpanjangan').addClass('none');
	$('#peminjaman').addClass('none');
}

function pengembalian(){
	$('#laporan').addClass('none');
	$('#data').addClass('none');
	$('#pengembalian').addClass('white').css({"color":"black"});
	$('#perpanjangan').addClass('none');
	$('#peminjaman').addClass('none');
}

function perpanjangan(){
	$('#laporan').addClass('none');
	$('#data').addClass('none');
	$('#pengembalian').addClass('none');
	$('#perpanjangan').addClass('white').css({"color":"black"});
	$('#peminjaman').addClass('none');
	
}

function peminjaman(){
	$('#laporan').addClass('none');
	$('#data').addClass('none');
	$('#pengembalian').addClass('none');
	$('#perpanjangan').addClass('none');
	$('#peminjaman').addClass('white').css({"color":"black"});
}

/*$(function (){
	var path = window.location.href;
	$('#nav a').each(function(){
		if(this.href === path){
			$(this).addClass('white');
		}
	});
});
*/


//FUNCTION untuk warna NAVIGASI DATA
function datadvd(){
	$('#datadvd').addClass('blue').css({"color":"#276c95"});
	$('#datamember').addClass('none');
	$('#datakaryawan').addClass('none');
}

function datamember(){
	$('#datadvd').addClass('none');
	$('#datamember').addClass('blue').css({"color":"#276c95"});
	$('#datakaryawan').addClass('none');
}

function datakaryawan(){
	$('#datadvd').addClass('none');
	$('#datamember').addClass('none');
	$('#datakaryawan').addClass('blue').css({"color":"#276c95"});
}

//FUNCTION  untuk warna NAVIGASI LAPORAN
function laporanpeminjaman(){
	$('#laporanpeminjaman').addClass('blue').css({"color":"#276c95"});
	$('#laporanpengembalian').addClass('none');
	$('#laporanstokdvd').addClass('none');
	$('#laporangaji').addClass('none');
	$('#laporanpresensi').addClass('none');
}

function laporanpengembalian(){
	$('#laporanpeminjaman').addClass('none');
	$('#laporanpengembalian').addClass('blue').css({"color":"#276c95"});
	$('#laporanstokdvd').addClass('none');
	$('#laporangaji').addClass('none');
	$('#laporanpresensi').addClass('none');
}

function laporanstokdvd(){
	$('#laporanpeminjaman').addClass('none');
	$('#laporanpengembalian').addClass('none');
	$('#laporanstokdvd').addClass('blue').css({"color":"#276c95"});
	$('#laporangaji').addClass('none');
	$('#laporanpresensi').addClass('none');
}

function laporangaji(){
	$('#laporanpeminjaman').addClass('none');
	$('#laporanpengembalian').addClass('none');
	$('#laporanstokdvd').addClass('none');
	$('#laporangaji').addClass('blue').css({"color":"#276c95"});
	$('#laporanpresensi').addClass('none');
}

function laporanpresensi(){
	$('#laporanpeminjaman').addClass('none');
	$('#laporanpengembalian').addClass('none');
	$('#laporanstokdvd').addClass('none');
	$('#laporangaji').addClass('blue');
	$('#laporanpresensi').addClass('blue').css({"color":"#276c95"});
}