//Hover logo
$(function () {
	$('#logo').hover(
			function(){
				$(this).attr('src','img/flash.svg');
			},
			function(){
				$(this).attr('src','img/LOGO.svg');
			})


	$( ".love" ).click(function() {
		var text = "favorite";
			$(this).val(text);
		});


		$( ".love2" ).click(function() {
			var text = "favorite";
				$(this).val(text);
			});

		// 	 $( "input" ).each(function(){
		//   $( "#onclick2" ).click(function(){
		// 		if (this.val != "favorite") {
		// 			this.val = "favorite";
		// 		}
		// 		else {
		// 			this.val = "favorite_border";
		// 		}
		//
		//   });
		// });
});

//sidenav panier
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

M.AutoInit();

document.addEventListener('DOMContentLoaded', function() {
	var elems = document.querySelectorAll('.collapsible');
	var instances = M.Collapsible.init(elems, options);
});
  var instance = M.Collapsible.getInstance(elem);

instance.open(3);
instance.close(3);
instance.destroy();
