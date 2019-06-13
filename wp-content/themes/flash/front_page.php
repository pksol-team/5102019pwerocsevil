<?php
	 
	 /* Template Name: Home Template */
	get_header(); 
?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section>
	<div class="container bg-clr">
	   <div class="row">
		   <div class="col-md-2">
		   		<?php get_sidebar(); ?>
		   </div><!-- End Coloum -->
		   <div class="col-md-8">
		   		<div class="my-tabs">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#" data-data="all">All Matches</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disableda" data-data="present" href="#">Direct</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disableda" data-data="past" href="#">Finished</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disableda" data-data="future" href="#">Upcoming</a>
						</li>
						
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">

						<div class="loader">
							<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
							<span>Loading...</span>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="profile">
						
						<!-- <div role="tabpanel" class="tab-pane fade" id="profile"> -->

							<div class="tabs-box">
								<ul class="tabs-box-list top-box-list tournament-list">
									
									<?php
										
										$leanguesRequest = wp_remote_get('http://livescore-api.com/api-client/fixtures/leagues.json?key=9GKXlzHjoF6v3mlO&secret=ah65KoQi7lmDlWyvDisYS9igOoMSL8GV');
										$leagues = json_decode($leanguesRequest['body']);

									?>

									<?php  foreach ($leagues->data->leagues as $key => $leag): ?>
										<li class="top-li" data-league="<?= $leag->league_id; ?>">
											<div class="content-padding">
												<span class="tournament"> <strong><?= $leag->country_name; ?></strong>: <a href="#"><?= $leag->league_name; ?></a></span>
												<span class="mini">
													<span class="down-icon"><i class="fa fa-chevron-down"></i></span>
												</span>
											</div>
										</li>
									<?php endforeach;  ?>
								</ul>
							</div>
						</div>
					</div>
			   </div>
			   
		   </div><!-- End Coloum -->
	   </div><!-- End Row -->
	</div><!-- End Container -->
</section><!-- End Section -->


<div class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
</div>
</article>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>