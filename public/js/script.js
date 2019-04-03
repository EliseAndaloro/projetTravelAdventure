//Hover logo
$(function () {
	$('#logo').hover(
			function(){
				$(this).attr('src','img/flash.svg');
			},
			function(){
				$(this).attr('src','img/LOGO.svg');
			})
	

});

//sidenav panier
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}


