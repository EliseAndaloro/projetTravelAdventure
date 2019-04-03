//Hover logo
$(function () {
	$('#logo').hover(function(){
		$(this).replaceWith('<img src="img/flash.svg">')
	})

})();

//sidenav panier
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

//random color background article
// function ran_col() { //function name
// 	var color = '#'; // hexadecimal starting symbol
// 	var letters = ['FFE646','FF0000','00FF00','0000FF','FFFF00','00FFFF','FF00FF','C0C0C0']; //Set your colors here
// 	color += letters[Math.floor(Math.random() * letters.length)];
// 	document.getElementById('body').style.background = color; // Setting the random color on your div element.
//
// }
var index = Math.round(Math.random() * 3);

      var ColorValue = "FFFFFF"; // default color - white (index = 0)

      if(index == 1)
      ColorValue = "FFCCCC"; //peach
      if(index == 2)
      ColorValue = "CCAFFF"; //violet
      if(index == 3)
      ColorValue = "A6BEFF"; //lt blue

      document.getElementsById("body")[0].style.backgroundColor = "#" + ColorValue;

      }
