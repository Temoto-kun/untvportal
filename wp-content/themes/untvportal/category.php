<?php get_header(); ?>

<div id="wrapper">  
    <div class="tags authors">
   
    <?php 
    $cat_title = "";
    $cat_color = "";
    if(is_category('programs')) : 

    $cat_title = "Programs";
    $cat_color = "#448CCB";
    endif;
    if(is_category('advocacies')) : 

    $cat_title = "Advocacies";
    $cat_color = "#F26C4F";
    endif;
    if(is_category('programs-host')) : 

    $cat_title = "Hosts";
    $cat_color = "#1CBBB4";
    endif;
    if(is_category('radio')) : 

    $cat_title = "Radio";
    $cat_color = "#92278F";
    endif;
    ?>
      <div class="row tagsHead" style="border-bottom-color: <?php echo $cat_color;?>;">
        <div class="large-6 medium-6 columns">
          <div class="tagsTitle" style="background-color:<?php echo $cat_color;?> ;">
	          
	          <?php echo $cat_title; ?>
          </div>
        </div>
      </div>
      
      <?php if(is_category('radio')): ?>
      
      <div class="slideRow">
        <div class="row hide-for-1010">
		        <ul class="homeslider">
					<li>
				  		<div class="large-8 medium-8 small-12 columns slideItem">
				              <img width="683" height="426" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzFlNTc5OSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzI5ODlkOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUxJSIgc3RvcC1jb2xvcj0iIzIwN2NjYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3ZGI5ZTgiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+" style="height:498px;" />	              
				              <div class="textHold">
				                <div class="large-12 columns">
				                  <div class="date">07<span>Apr</span><span class="line"></span></div>
				                </div>
				                <div class="large-12 columns textHoldBottom">
				                  <div class="large-9 medium-9 columns">
									<img src="<?php echo site_url() ?>/wp-content/uploads/2014/05/logo.png" alt="10347464594_cbb806f238_b"/>
				                    <h1>UNTV Radio</h1>
				                   	<p>UNTV Radio La Verdad is a 10,000 watt news and public service AM radio station which can be heard at a frequency of 1350kHz operating 24 hours a day.</p>
				                  </div>
				                </div>
				              </div>
						</div>
						
					  	<div class="large-4 medium-4 small-12 columns slideItem">
					          
				              <img width="441" height="275" src="<?php echo site_url() ?>/wp-content/uploads/2014/05/1339516595album13.jpg" class="attachment-slider_small wp-post-image" alt="6940343109_8e0633088e_b" style="height:249px;">					             
				                		
						</div>
						<div class="large-4 medium-4 small-12 columns slideItem">
				            
				              <img width="441" height="275" src="<?php echo site_url() ?>/wp-content/uploads/2014/05/1339516566album12.jpg" class="attachment-slider_small wp-post-image" alt="9720369538_b6e96cb5ee_b"  style="height:249px; " />					              
				                	
						</div>
							 
					</li> 

				    <li>
					 	<div class="large-4 medium-4 small-12 columns slideItem">
				           
				              <img width="441" height="275" src="<?php echo site_url() ?>/wp-content/uploads/2014/05/1339516519album11.jpg" class="attachment-slider_small wp-post-image" alt="fw5" style="height:249px;" />				              
				        </div>
						<div class="large-4 medium-4 small-12 columns slideItem">
				            
				              <img width="441" height="275" src="<?php echo site_url() ?>/wp-content/uploads/2014/05/1339516629album14.jpg" class="attachment-slider_small wp-post-image" alt="fashion" style="height:249px;" />				              
				                
				        </div>
						<div class="large-4 medium-4 small-12 columns slideItem">
				           
				              <img width="441" height="275" src="<?php echo site_url() ?>/wp-content/uploads/2014/05/1339516742album18.jpg" class="attachment-slider_small wp-post-image" alt="food" style="height:249px;"/>				              
				                
				        </div>
						<div class="large-4 medium-4 small-12 columns slideItem">
				          
				              <img width="441" height="275" src="<?php echo site_url() ?>/wp-content/uploads/2014/05/1339516724album17.jpg" class="attachment-slider_small wp-post-image" alt="ed hardy &amp; splash one I" style="height:249px;" />				              
				                
				        </div>
						<div class="large-4 medium-4 small-12 columns slideItem">
				            
				              <img width="441" height="275" src="<?php echo site_url() ?>/wp-content/uploads/2014/05/1339516688album16.jpg" class="attachment-slider_small wp-post-image" alt="bench" style="height:249px;" />				              
				                   
				        </div>
						<div class="large-4 medium-4 small-12 columns slideItem">
				           
				              <img width="441" height="275" src="<?php echo site_url() ?>/wp-content/uploads/2014/05/1339516659album15.jpg" class="attachment-slider_small wp-post-image" alt="Joy of comfort" style="height:249px;"/>				              
				                    
				        </div>
									                
				    </li>
		        </ul> 
	    	
        </div>
      <?php endif ?>

      <div class="row whiteRow">
        <div class="large-12 medium-12 columns tagMain" >
          <div class="large-12 columns post_blocks">
			<div id="jw-player">
	                 <div id="player-content">
	                     <div id="mediaplayer_wrapper" style="height:45px;">
	                     <object type="application/x-shockwave-flash" data="http://www.untvradio.com/wp-content/themes/untvradio/jwplayers/player.swf" width="100%" height="100%" bgcolor="#000000" id="mediaplayer" name="mediaplayer" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=http%3A%2F%2Fwww.untvradio.com%2F&amp;id=mediaplayer&amp;flashplayer=http%3A%2F%2Fwww.untvradio.com%2Fwp-content%2Fthemes%2Funtvradio%2Fjwplayers%2Fplayer.swf&amp;screencolor=b2b2b2&amp;autostart=true&amp;provider=rtmp&amp;streamer=rtmp%3A%2F%2Flivestream01.untvradio.com%2Fpublic%2F&amp;file=untvradiostream&amp;skin=http%3A%2F%2Fwww.untvradio.com%2Fwp-content%2Fthemes%2Funtvradio%2Fjwplayers%2Fskins%2Funtvradio.zip&amp;abouttext=UNTV%20Radio&amp;aboutlink=untvradio&amp;controlbar.position=bottom"></object></div>
	                     
	                 </div>
	                 <script type="text/javascript">
						jwplayer('mediaplayer').setup({
							'skin':'<?php echo get_template_directory_uri(); ?>/player_skins/untvradio.zip',
							'flashplayer': 'http://www.untvweb.com/players/player.swf',
							//'flashplayer': 'http://www.untvradio.com/wp-content/themes/untvradio/jwplayers/player.swf',
							'id': 'playerID',  
							'screencolor': 'b2b2b2',
							'autostart': 'false',    
							'width': '399',     
							'height': '45',
							'provider': 'rtmp', 
							'streamer': 'rtmp://livestream01.untvradio.com/public/',
							'file': 'untvradiostream',
							'abouttext': 'UNTV Radio',     
							'aboutlink': 'mailto:info@untvradio.com', 
							'controlbar':'bottom',
							'events': {
									onBufferChange: function(event) { document.getElementById('PlayerStatus').innerHTML = "Buffering..." },
									onPlay: function(event) { document.getElementById('PlayerStatus').innerHTML = "Playing..."; },
									onBuffer: function(event) { document.getElementById('PlayerStatus').innerHTML = "Buffering..."; },
									onIdle: function(event) { document.getElementById('PlayerStatus').innerHTML = "Connection Idle."; },
									onPause: function(event) { document.getElementById('PlayerStatus').innerHTML = "Stopped"; }
							},
							'modes':[{type: 'flash', src: 'http://www.untvradio.com/wp-content/themes/untvradio/jwplayers/player.swf'},{     
									type: 'html5',        
									config: {             
										levels: [ {
												'file': 'http://livestream01.untvradio.com:1935/public/untvradiostream/playlist.m3u8'
											} ],                                                   
										'provider': 'audio'
									}                     
								}]             
						});				
					</script>
	                 <!-- <div id="PlayerStatus">Playing...</div> -->
	                 <div class="clear"></div>
      		     </div>
          </div>
          <div class="large-12 columns post_blocks">

				<?php
					$cat_name = single_cat_title("",false);
				   $category = "programs";
				   $category_post = get_posts('numberposts=-1offset=0&orderby=title&order=ASC&category_name='.$cat_name);
				   foreach($category_post as $post) :
				   setup_postdata($post);
				   
				
				    $thumbnail_id = get_post_thumbnail_id($post->ID);
				    $thumbnail_object = get_post($thumbnail_id);
				    
				?>
				<div class="large-4 medium-6 small-12 columns equal" style="padding:10px;">
	              <div class="image">
	                <img width="305" height="215" src="<?php echo $thumbnail_object->guid; ?>" class="attachment-author wp-post-image" alt="<?php the_title(); ?>" />	                
	              		                
						
	              </div>
		              
	              <div class="title">
	                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
	              </div>
	              
	              <p><?php the_excerpt(); ?></p>
	              <a href="<?php the_permalink(); ?>" class="readMore">Read More</a>
	                              
	            </div>
				
	        <?php endforeach; ?>
		
	

          </div>


         

        </div>

		

  <!-- Music Tabs -->
  

 

 


           


     
   
      </div>

      <div class="section lastSection">
            
      </div>
    </div>    


</div>

	

<?php get_footer(); ?>
