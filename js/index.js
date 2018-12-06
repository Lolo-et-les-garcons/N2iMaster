$(document).ready(function() {

	var input = $(".switch>input"), 
	nbCheck = 1,
   flag = 1,
   height = 65;
	jauge = $(".jauge>div");
	input.change(function() {
		if($(this).is(":checked")) {
			nbCheck += 1;
   		}
   		else {
   			nbCheck -= 1;
   		}

   		if(nbCheck == 0) {
   			height = 20;
   		}
   		else if (nbCheck == 1) {
   			height = 55;
   		}
   		else {
   			height = 80;
   		}
	});

   setInterval(function() {
      if (flag == 1) {
         height += 10;
         flag = 0;
      }
      else {
         height -= 10;
         flag = 1;
      }
      jauge.css("height", height+"%");
   }, 2000);
});