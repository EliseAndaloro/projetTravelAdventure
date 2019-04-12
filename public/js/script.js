//Hover logo
$(function () {
	$('#logo').hover(
			function(){
				$(this).attr('src',cheminImg+'/flash.svg');
			},
			function(){
				$(this).attr('src',cheminImg+'/LOGO.svg');
			})


	$( ".love" ).click(function() {
		
		let productId = $(this).attr('id').substr(9);
		
		let favorite = "favorite";
		
		let notFavorite = "favorite_border";
		
		let currentValue = $(this).val();
		
		if (currentValue == favorite) {
			
			$(this).val(notFavorite);
			
			$.get( "removeWishList?product_id=" + productId, 
					function( data ) {
						console.log('Retiré des favoris');
					});
		}
		else {
			$(this).val(favorite);
			
			$.get( "createWishList?product_id=" + productId, 
					function( data ) {
						console.log('Ajouté aux favoris');
					});
		}
		/*			
		$.ajax({
		       url : '/ajax',
		       type : 'GET',// La ressource ciblée
		       data: product,
		       dataType : JSON,
		    });
		*/
		
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
