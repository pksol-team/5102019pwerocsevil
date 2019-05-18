<?php
 /* Template Name: Home Template */
 get_header(); ?>
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
							<a class="nav-link active" href="#profile" role="tab" data-toggle="tab">profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#one" role="tab" data-toggle="tab">buzz</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#two" role="tab" data-toggle="tab">buzz</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#three" role="tab" data-toggle="tab">buzz</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#four" role="tab" data-toggle="tab">references</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active show" id="profile">
							<div class="tabs-box">
								<ul class="tabs-box-list top-box-list tournament-list">
									<li class="top-li">
										<div class="content-padding">
											<span class="checkbox"><input type="checkbox" value=""></span>
											<span class="flag"><img src="https://www.flashscore.vn/res/image/country_flags/world.png" alt="flag"></span>
											<span class="tournament">CHÂU Á: <a href="#">AFC Cup</a></span>
											<span class="star"><i class="fa fa-star"></i></span>
											<span class="mini">
												<span class="next-text"><a href="#">Bảng xếp hạng</a></span>
												<span class="first-text"><a href="#">Hiển thị các trận đấu (4)</a></span>
												<span class="down-icon"><i class="fa fa-chevron-down"></i></span>
											</span>
										</div>
										<ul class="sub-details">
											<li>
												<a href="#">
													<span class="checkbox-two"><input type="checkbox" value=""></span>
													<span class="win-detail">
														<span class="finish">Kết thúc</span>
														<span class="player">Al Jaish (Syr)</span>
													</span>
													<span class="points">2 - 2</span>
													<span class="goals-detail">
														<span class="team">Nejmeh SC (Leb)</span>
														<span class="final-points">(1 - 0)</span>
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="checkbox-two"><input type="checkbox" value=""></span>
													<span class="win-detail">
														<span class="finish">Kết thúc</span>
														<span class="player">Al Jaish (Syr)</span>
													</span>
													<span class="points">2 - 2</span>
													<span class="goals-detail">
														<span class="team">Nejmeh SC (Leb)</span>
														<span class="final-points">(1 - 0)</span>
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="checkbox-two"><input type="checkbox" value=""></span>
													<span class="win-detail">
														<span class="finish">Kết thúc</span>
														<span class="player"><span class="red-card">&nbsp</span>Al Jaish (Syr)</span>
													</span>
													<span class="points">2 - 2</span>
													<span class="goals-detail">
														<span class="team">Nejmeh SC (Leb)</span>
														<span class="final-points">(1 - 0)</span>
													</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="one">bbb</div>
						<div role="tabpanel" class="tab-pane fade" id="two">fef</div>
						<div role="tabpanel" class="tab-pane fade" id="three">efgfg</div>
						<div role="tabpanel" class="tab-pane fade" id="four">ccc</div>
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