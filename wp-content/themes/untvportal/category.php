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
    ?>
      <div class="row tagsHead" style="border-bottom-color: <?php echo $cat_color;?>;">
        <div class="large-6 medium-6 columns">
          <div class="tagsTitle" style="background-color:<?php echo $cat_color;?> ;">
	          
	          <?php echo $cat_title; ?>
          </div>
        </div>
      </div>

      <div class="row whiteRow">
        <div class="large-12 medium-12 columns tagMain" >
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
