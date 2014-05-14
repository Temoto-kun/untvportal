//attach rating system on load




jQuery(document).ready(function(){

			

			jQuery("div[rel='wpmrrate']").each(function(){



				var id = jQuery(this).attr("id"); 

				jQuery(this).mouseenter(function(){

				jQuery("#" + id + " #internal_progress").css("display","block");

				jQuery("#" + id + "_anchor_container").css("display","block");

											});

				var hover_image = jQuery(this).attr("hover_image");

				var on_image = jQuery(this).attr("on_image");

				var off_image = jQuery(this).attr("off_image");

				jQuery("#" + id + "_anchor_container a").each(function(){

					jQuery(this).mouseover(function(){ 

											   

					jQuery("#" + id + "_anchor_container a img").attr("src", off_image);

					var curLink= jQuery(this).attr("rel");



					for(var index=1; index< curLink;index++)

						jQuery("#" + id + "_anchor_container #a" + index + " img").attr("src",on_image);

					jQuery("#" + id + "_anchor_container #a" + curLink + " img").attr("src",hover_image);							   

											   });											  

					

						

				});

			});

			jQuery("div[rel='wpmrrate']").mouseleave(function(){

				var id = jQuery(this).attr("id"); 

				jQuery("#" + id + " #internal_progress").css("display","block");

				jQuery("#" + id + "_anchor_container").css("display","block");				

			});

			jQuery("div[rel='wpmrrate']").mouseleave(function(){

				var id = jQuery(this).attr("id"); 

				jQuery("#" + id + " #internal_progress").css("display","block");

				jQuery("#" + id + "_anchor_container").css("display","block");				

			});			

});



function wp_mr_send_rating(post,rating_type,rating,response)

{

	jQuery("#" + response).animate({opacity:0},500,

							  function()

							  {

								  _send_rating(post,rating_type,rating,response);

							  }

							  );

}

function _send_rating(post,rating_type,rating,response)

{

	ajax_url = WPMRAjax.ajaxurl;

	jQuery.ajax({

		type:"POST",

		url:ajax_url,

		data:"action=wpmr-rate&id=" +post + "&type=" + rating_type + "&rating=" + rating,

		success:function(msg){

			jQuery("#" + response).html(msg);

			jQuery("#" + response).animate({opacity:1},500);

		}

	});



}




jQuery(".hideWhenClicked span").hover(function(){
   jQuery(this).addClass("fa-star");
});

