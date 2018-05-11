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
 <?php the_excerpt(); ?>
</div><!-- /.blog-post -->




			</div>



			<div class="col-md-1 travelling2">
				<h3>2</h3>
				<a href="#">comments</a>
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
				<div class="lequotes1">
					<img src="images/01.png" class="img-responsive" alt="" />
				</div>
				<div class="lequotes2">
					<h3>Le Quotes</h3>
				</div>
					<div class="clearfix"> </div>
			</div>
				<div class="billgates">
				<div class="col-md-10 billgates1">
					<h2>Quotes from Bill Gates</h2>
					<h5>by <a href="#">Samidi ,</a> 27 July 2013 ,<a href="#">Quotes</a></h5>
				</div>
				<div class="col-md-1 billgates2">
					<h3>6</h3>
					<p><a href="#">comments</a></p>
				</div>
					<div class="clearfix"> </div>
					<h4>“Lorem Ipsum dolor sit amet”</h4>
					<h6>Bill Gates</h6>
				</div>
	</div>	
	<div class="loadmore">
			<a class="more" href="single.html">Read More</a>
	</div>
	<div class="loadmore1">
			<a class="load" href="#">load More</a>	
	</div>
</div>	
</div>
<!-- content -->