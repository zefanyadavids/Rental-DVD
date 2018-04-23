	function showTime() {
	    var today = new Date();
	    var start_hour = checkTime(16), start_minute = checkTime(0); start_second = checkTime(0);
	    var curr_hour = checkTime(today.getHours()), curr_minute = checkTime(today.getMinutes()), curr_second = checkTime(today.getSeconds());

	    Date.prototype.getMonthName = function() {
	        var monthNames = [ "JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER" ];
	        return monthNames[this.getMonth()];
	    }

	    var date = checkTime(today.getDate()), month = checkTime(today.getMonthName()), year = today.getYear();
	    var element = document.getElementsByClassName('printTime');
	    element[0].innerHTML = checkTime(curr_hour - start_hour) + ":" + checkTime(curr_minute - start_minute) + ":" + checkTime(curr_second - start_second);
	  	element[1].innerHTML = month;
	 	element[2].innerHTML = date;
	    element[3].innerHTML = year + 1900;
	}
	             
	function checkTime(i) {
	    if (i < 10) {
	        i = "0" + i;
	    }
	    return i;
	}

	setInterval(showTime, 1000); 

	
