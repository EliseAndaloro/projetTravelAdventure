$(function () {
	$('#logo').hover(function(){
		$(this).replaceWith('<img src="img/flash.svg">')
	})

})();

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
