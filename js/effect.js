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