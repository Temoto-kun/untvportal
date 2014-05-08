<?php get_header(); ?>



    
<style>
    .about {
    
    }
</style>
 


<div id="wrapper">  
<?php while ( have_posts() ) : the_post(); ?>
	<?php

	$banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$posttags = get_the_tags();
	$tag = "";
	if ($posttags) {
	  foreach($posttags as $tag) {
	  	$tag = $tag->slug;
	  }
	}


?>

	<div class="about" style="background: url(<?php echo $banner[0]; ?>) no-repeat top center; padding-top: 317px;">
	</div>
    <div class="tags authors">
      
      <div class="row whiteRow">
        <div class="large-8 medium-12 columns tagMain">
          <div class="large-12 columns post_blocks">
            


				<div class="large-12 medium-12 small-12 columns ">
					<h2><?php the_title(); ?></h2>
					<?php the_content();?>   
	            </div>
		
				      
			
      

          </div>



        </div>

		<!-- Music Tabs -->
		<?php
		if(in_category('programs-host')):
		$tag = "";
		if ($posttags) {
	 	 foreach($posttags as $tag) {
	  		$tag = $tag->name;
	  	  }
		}
		?>

		<div class="large-4 medium-12 columns ">
		  <div class="large-12 medium-12  columns singleWidgets" >
		  
		  	<h3 class="widget-title" style="margin:0px;">Programs</h3>

		  	<h4><?php echo $tag; ?></h4>
		  </div>
		</div>
		<?php

			 
			endif;


		?>
		<?php
		if(in_category('programs')):
		$args=array('posts_per_page'=>-1, 'tag' => $tag, 'category_name' =>'programs-schedule');
		$wp_query = new WP_Query( $args );
		
		if ( have_posts() ) :

		    while (have_posts()) : the_post();
		        
		?>
		

		<div class="large-4 medium-12 columns ">
		  <div class="large-12 medium-12  columns singleWidgets" >
		  
		  	<h3 class="widget-title" style="margin:0px;">Schedule</h3>

		  	<p>
		  	<?php the_content();?></p>
		  </div>
		</div>
		<?php

			    endwhile;
			endif;
			$wp_query = null;
			wp_reset_query();
			endif;


		?>

		
		<div class="large-4 medium-12 columns ">
	        <div id="accountactivity" class="large-12 medium-12 columns singleWidgets">
	        <?php
	        if(in_category('programs')):
	        $args=array('posts_per_page'=>-1, 'tag' => $tag, 'category_name' =>'programs-episode');
	        $wp_query = new WP_Query( $args );
	        
	        if ( have_posts() ) :

	            while (have_posts()) : the_post();
	                
	        ?>
	        <input type="hidden" id="playlistId" value="<?php echo get_the_content(); ?>"> 
	        <h3 class="widget-title" style="margin:0px;">Episodes</h3>
	        <?php

	        	    endwhile;
	        	endif;
	        	$wp_query = null;
	        	wp_reset_query();
	        	endif;


	        ?>  
	        

	         </div>
	     </div>
   		<?php
   		if(in_category('programs')):
   		$args=array('posts_per_page'=>-1, 'tag' => $tag, 'category_name' =>'programs-host');
   		$wp_query = new WP_Query( $args );
   		
   		if ( have_posts() ) :

   		    
   		?>
	     <div class="large-4 medium-12 columns" style="float:right; margin-bottom:20px;">
         	
         	<div class="large-12 medium-12 columns post_x2 hide_arrows singleWidgets">
                     <h3 class="widget-title" style="margin:0px;">Hosts</h3>

               <ul class="bx_news">

                     <?php 
                     	while (have_posts()) : the_post();
   		        		$hostpic = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
   		        	?>                
                     <li>
                       <div class="slideNewsItem">
                           <img width="427" height="220" src="<?php echo $hostpic[0]; ?>" />                                  
                       </div>

                         <div class="title">
                           <a href="<?php the_permalink();?>"><?php the_title();?></a>
                         </div>
                         
                         <?php the_excerpt();?>
                         <a href="<?php the_permalink(); ?>" class="readMore">Read More</a>
                     </li>
                     <?php
                     	endwhile;
                     ?>

               
                   

                         
                           
               </ul>
              
         
                 </div>     
               </div> 

               <?php
               	endif;
               	$wp_query = null;
               	wp_reset_query();
               
               	endif;

               ?>  
   
      </div>
      <div class="section lastSection" style="margin-bottom:20px;">
            &nbsp;
      </div>

        </div>
        <?php endwhile; ?>
    </div>




<!-- <div id="accountactivity" class="large-4 medium-12 columns addLeft">
	
</div>  -->



<?php get_footer(); ?>
<script>
  /*
  Copyright 2011 : Simone Gianni <simoneg@apache.org>

  -- update by tcuttrissweb --
     adds in title besdie thumbs in carousel.
     adjusted css from the original to make room for this
       allows resizing
         to adjust size of the player adjust the css for:
         .youtube iframe.player width / height accordingly.

  -- update by oomlaut --
     isolated function in its own scope, preventing $ collisions
     converted to jQuery plugin pattern.
        allows for chainability
     added link to YouTube Channel (optional)
     refactored callback functionality
     adjusted css:
        visual representation of currently viewing item
        

  Released under The Apache License 2.0 
  http://www.apache.org/licenses/LICENSE-2.0

  */
  
  if (typeof jQuery != "undefined") {
      (function($) {
          $(document).ready(function() {
              $.fn.extend({
                  youTubeChannel: function(usrArgsObj, callback) {
                      var create = {
                          feed: function() {
                            // console.log("feed");
                              this.player(settings.videos[settings.loadItem], settings.autoplay);
                              this.carousel();
                              if (settings.channelText !== null) settings.container.append(this.channelLink);
                              if ($.isFunction(callback)) callback();
                              return true;
                              },
                          carousel: function() {
                              var scope = this;
                              var $car = $('ul.carousel', settings.container);
                              if ($car.length === 0) {
                                  $('<div>',{
                                    "id" : "contentwrap1",
                                    "class" : "newsScollers",
                                    "width" : "100%"
                                  }).appendTo(settings.container);
                                  $('<div>',{
                                    "id" : "contentwrap2",
                                    "class" : "large-12 medium-12 columns"
                                  }).appendTo("#contentwrap1");
                                  $('<div>',{
                                    "id" : "contentwrap3",
                                    "class" : "scroller"
                                  }).appendTo("#contentwrap2")
                                  $car = $('<ul>', {
                                      "class": "playlist"
                                  }).appendTo("#contentwrap3");
                                  // settings.container.append($car);
                              }
                              $.each(settings.videos, function(i, video) {
                                  // if (i < settings.showMax) {
                                      $car.append(create.thumbnail(video, i == settings.loadItem));
                                     
                                  // }
                              });
                              return $car;
                          },
                          thumbnail: function(video, selected) {
                              var scope = this;
                              console.log();
                              var imgurl = video.thumbnails[0].url;
                              var img = $('img[src="' + imgurl + '"]');
                              var desc;
                              var container;
                              var pub;
                              var views;

                              if (img.length !== 0) return;
                              var item = $('<li>', {
                                  "class": "item",
                                  click: function() {
                                      var $this = $(this);
                                      if (!$this.hasClass('nowPlaying')) {
                                          $(this).addClass('nowPlaying').siblings('.nowPlaying').removeClass('nowPlaying');
                                          scope.player(video, true);
                                      }
                                  }
                              });
                              if (selected) item.addClass('nowPlaying');
                              var imgwrap1 = $('<div>',{
                                "class" : "image"
                              }).appendTo(item);
                              var imgwrap2 = $('<a>',{
                              }).appendTo(imgwrap1);

                              img = $('<img>', {
                                  "class": "thumbnail attachment-tiny_thumb wp-post-image",
                                  "height" : "75",
                                  "width" : "97",
                                  src: imgurl,
                                  title: video.title
                              }).appendTo(imgwrap2);
                              var titlewrap1 = $('<div>',{
                                "class" : "title"
                              }).appendTo(item);
                              desc = $('<a>',{
                                "class": "description",
                                text: video.title
                              }).appendTo(titlewrap1);
                              
                              views =  $('<div>', {
                                  "class": "views info",
                                  text: video.views + " views"
                              }).appendTo(item);
                              return item;
                          },
                          player: function(video, autoplay) {
                            // console.log("player");
                              var scope = this;
                            
                              var opts = settings;
                              if (arguments.length > 1 && autoplay) {
                                  opts.playopts.autoplay = 1;
                              }

                              var src = 'http://www.youtube.com/embed/' + video.id;
                              if (opts.playopts) {
                                  src += '?';
                                  $.each(opts.playopts, function(i, v) {
                                      src += i + '=' + v + '&';
                                  })
                                  src += '_a=b';
                              }

                              var ifr = $('iframe', settings.container);
                              
                              if (ifr.length === 0) {
                                  $('<div>',{
                                    "id" : "vidwrap1",
                                    "class" : "newsScollers large-12 medium-12 columns"
                                  }).appendTo(settings.container);
                                  $('<div>',{
                                    "id" : "vidwrap2",
                                    "class" : "featuredImage show-for-small-up"
                                  }).appendTo("#vidwrap1");
                                  ifr = $('<iframe>', {
                                      "class": "player",
                                      "width" : "100%",
                                      "height" : "275",
                                      scrolling: "no",
                                  }).appendTo("#vidwrap2");
                                  console.log("appennded");
                              }
                              ifr.attr('src', src);
                              console.log(settings.container);
                          },
                          channelLink: function() {
                              var scope = this;
                              var link = $('<a>', {
                                  "class": "channelLink",
                                  text: settings.channelText,
                                  href: "http://www.youtube.com/user/" + settings.user,
                                  target: "_blank"
                              });
                              return link;
                          }
                      };

                      var defaults = {
                          autoplay: false,
                          user: null,
                          container: null,
                          videos: [],
                          loadItem: 0,
                          showMax: 30,
                          playlist : $("#playlistId").val(),
                          channelText: null,
                          playopts: {
                              autoplay: 0,
                              egm: 1,
                              autohide: 1,
                              fs: 1,
                              showinfo: 1
                          }
                      };
                      var settings = $.extend(true, {}, defaults, usrArgsObj);

                      return this.each(function(i, v) {
                   
                          settings.container = $(this).addClass('youtube-channel');
                          
                          // console.log(settings);
                          $.getJSON('https://gdata.youtube.com/feeds/api/playlists/'+settings.playlist+'?v=2&alt=json-in-script&format=5&callback=?', null, function(data) {
                              // console.log(data);
                              $.each(data.feed.entry, function(i, entry) {
                                  // console.log(entry.id.$t.match('[^/]*$'));
                                  // console.log(entry.title.$t);
                                  if (entry.title.$t == "Private video"){

                                  
                                  }else{
                                    // console.log(data);
                                    var url = entry.link[0].href;
                                    var query_string = url.split("?");
                                    var params = query_string[1].split("&");
                                    var value = params[0].split("=");
                                    var id = value[1];
                                   
                                    
                                    settings.videos.push({
                                        title: entry.title.$t,
                                        id: id,
                                        thumbnails: entry.media$group.media$thumbnail,
                                        views: entry.yt$statistics.viewCount
                                    });
                                    // console.log("push");
                                  }
                              });
                              create.feed();
                          });
                      });
                  }
              }); //end plugin
              $('#accountactivity').youTubeChannel({
                  user: 'untvweb',
                  showMax: 30,
                  channelText: "",

              }, function() {
                  $('#accountactivity').find('li.item:even').css({
                      clear: "left"
                  }).end().find(".channelLink").addClass('more');
              });

          }); //document.ready
      })(jQuery); //jquery anonymous function
  } //endif
  //]]>
</script>