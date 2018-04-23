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
	$('#laporan').removeClass('none').addClass('white');
	$('#data').removeClass('white').addClass('none');
	$('#pengembalian').removeClass('white').addClass('none');
	$('#perpanjangan').removeClass('white').addClass('none');
	$('#peminjaman').removeClass('white').addClass('none');
}

function data(){
	$('#laporan').removeClass('white').addClass('none');
	$('#data').removeClass('none').addClass('white');
	$('#pengembalian').removeClass('white').addClass('none');
	$('#perpanjangan').removeClass('white').addClass('none');
	$('#peminjaman').removeClass('white').addClass('none');
}

function pengembalian(){
	$('#laporan').removeClass('white').addClass('none');
	$('#data').removeClass('white').addClass('none');
	$('#pengembalian').removeClass('none').addClass('white');
	$('#perpanjangan').removeClass('white').addClass('none');
	$('#peminjaman').removeClass('white').addClass('none');
}

function perpanjangan(){
	$('#laporan').removeClass('white').addClass('none');
	$('#data').removeClass('white').addClass('none');
	$('#pengembalian').removeClass('white').addClass('none');
	$('#perpanjangan').removeClass('none').addClass('white');
	$('#peminjaman').removeClass('white').addClass('none');
	
}

function peminjaman(){
	$('#laporan').removeClass('white').addClass('none');
	$('#data').removeClass('white').addClass('none');
	$('#pengembalian').removeClass('white').addClass('none');
	$('#perpanjangan').removeClass('white').addClass('none');
	$('#peminjaman').removeClass('none').addClass('white');
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