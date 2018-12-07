$(document).ready(function() {

	var input = $(".switch>input"), 
	nbCheck = 1,
   flag = 1,
   height = 65;
	jauge = $(".jauge>div");

   //barre d'énergie lul
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
   }, 2500);

   //Température
   var temp = Math.floor(Math.random()*15+35), r, g;
   r = temp*5;
   g = (1.1-(temp/50))*255;
   $(".indicateur1").css("background-color", "rgb("+r+","+g+",16)");
   $(".tempSoleil>div:first-child>p").text("Température : "+temp+"°C");

   //vent
   var vent = Math.floor(Math.random()*30+15), duration;
   duration = (1-((vent-15)/30))*3+3;
   $(".vent>img").css("animation-duration", duration+"s");
   $(".vent>h2").text(vent+"km/h");

   //ensoleillement
   var sol = 128 + Math.floor(Math.random()*128);
   $(".indicateur2").css("background-color", "rgb(192,"+sol+",0)");
});