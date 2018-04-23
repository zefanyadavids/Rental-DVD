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


function laporan(){
	$('#laporan').removeClass('none').addClass('white').css({"color":"black"});
	$('#data').removeClass('white').addClass('none');
	$('#pengembalian').removeClass('white').addClass('none');
	$('#perpanjangan').removeClass('white').addClass('none');
	$('#peminjaman').removeClass('white').addClass('none');
}

function data(){
	$('#laporan').removeClass('white').addClass('none');
	$('#data').removeClass('none').addClass('white').css({"color":"black"});
	$('#pengembalian').removeClass('white').addClass('none');
	$('#perpanjangan').removeClass('white').addClass('none');
	$('#peminjaman').removeClass('white').addClass('none');
}

function pengembalian(){
	$('#laporan').removeClass('white').addClass('none');
	$('#data').removeClass('white').addClass('none');
	$('#pengembalian').removeClass('none').addClass('white').css({"color":"black"});
	$('#perpanjangan').removeClass('white').addClass('none');
	$('#peminjaman').removeClass('white').addClass('none');
}

function perpanjangan(){
	$('#laporan').removeClass('white').addClass('none');
	$('#data').removeClass('white').addClass('none');
	$('#pengembalian').removeClass('white').addClass('none');
	$('#perpanjangan').removeClass('none').addClass('white').css({"color":"black"});
	$('#peminjaman').removeClass('white').addClass('none');
	
}

function peminjaman(){
	$('#laporan').removeClass('white').addClass('none');
	$('#data').removeClass('white').addClass('none');
	$('#pengembalian').removeClass('white').addClass('none');
	$('#perpanjangan').removeClass('white').addClass('none');
	$('#peminjaman').removeClass('none').addClass('white').css({"color":"black"});
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

function datadvd(){
	$('#datadvd').removeClass('none').addClass('white').css({"color":"black"});
	$('#datamember').removeClass('white').addClass('none');
	$('#datakaryawan').removeClass('white').addClass('none');
}

function datamember(){
	$('#datadvd').removeClass('white').addClass('none');
	$('#datamember').removeClass('none').addClass('white').css({"color":"black"});
	$('#datakaryawan').removeClass('white').addClass('none');
}

function datakaryawan(){
	$('#datadvd').removeClass('white').addClass('none');
	$('#datamember').removeClass('white').addClass('none');
	$('#datakaryawan').removeClass('none').addClass('white').css({"color":"black"});
}