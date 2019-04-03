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


