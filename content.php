<!-- content -->
	<div class="container">
		<div class="content">
			<a href="single.html"><img src="images/img2.jpg" class="img-responsive" alt="" /></a>
			<i class="aeroplane"> </i>
	<div class="travelling">
		<title><?php echo get_bloginfo( 'name' ); ?></title>
			<div class="col-md-10 travelling1">

				
<div class="blog-post">
<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php
the_title(); ?></a></h2>
 <p class="blog-post-meta"><?php the_date(); ?> par <a
href="#"><?php the_author(); ?></a></p>
<?php if ( has_post_thumbnail() ) {?>
12
<div class="row">
<div class="col-md-4"> <?php the_post_thumbnail('thumbnail'); ?>
</div>
<div class="col-md-6"> <?php the_excerpt(); ?> </div>
</div>
<?php } else { ?>
<?php the_excerpt(); ?> <?php } ?>
</div><!-- /.blog-post -->






			</div>



			<div class="col-md-1 travelling2">
				<h3>2</h3>
				<a href="<?php comments_link(); ?>"> <?php printf( _nx( 'One Comment',
'%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ),
number_format_i18n( get_comments_number() ) ); ?> </a>
			</div>
				<div class="clearfix"> </div>

	</div>


<br>
<h4>Archives</h4> <ol class="list-unstyled"> <?php
wp_get_archives( 'type=monthly' ); ?> </ol> 
<h4>About</h4> <p><?php the_author_meta( 'description' ); ?>
</p> 

	<div class="lequotes">
		
			<div class="col-md-12">
				<a class="more" href="single.html">Read More</a>
			</div>
			<div class="col-md-12 lequotes3 ">
				
				
					
			</div>
			
	</div>	
	
</div>	
</div>
<!-- content -->