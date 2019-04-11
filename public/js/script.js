//Hover logo
$(function () {
	$('#logo').hover(
			function(){
				$(this).attr('src','img/flash.svg');
			},
			function(){
				$(this).attr('src','img/LOGO.svg');
			})


	$( "#onclick" ).click(function() {
		var text = "favorite";
			$(this).val(text);
		});


		// $( "#onclick2" ).click(function() {
		// 	var text = "favorite";
		// 		$(this).val(text);
		// 	});

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
		$( input ).click(function() {
		  $( "onclick2" ).each(function( i ) {
		    if ( this.style.color !== "blue" ) {
		      this.style.color = "blue";
		    } else {
		      this.style.color = "";
		    }
		  });
		});

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

document.addEventListener('DOMContentLoaded', function() {
	 var elems = document.querySelectorAll('.fixed-action-btn');
	 var instances = M.FloatingActionButton.init(elems, {
		 direction: 'bottom'
	 });
 });
