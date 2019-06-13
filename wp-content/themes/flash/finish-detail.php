<?php
   /* Template Name: Detail-page */
   get_header(); ?>
<main id="content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section>
         <div class="bg-clr">

			<div class="tab-content">
				<div class="loader">
					<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
					<span>Loading...</span>
				</div>
			</div>

             <div class="row hidden">
				
					<div class="col-4 col-md-4 flag-img home-team score">
						
						Pakistan
						<!-- <img src="https://www.flashscore.vn/res/image/data/zB15YqDr-Eaw4x6f7.png" class="img-responsive"> -->

					</div>

					<div class="col-4 col-md-4 score text-center">
						<h1>2 - 0</h1>
					</div>

					<div class="col-4 col-md-4 flag-img away-team score">

						India
						<!-- <img src="https://www.flashscore.vn/res/image/data/KI3dBtHG-S4bMqp8A.png" class="img-responsive"> -->

					</div>
				
			 </div>
			
			
			<div class="row hidden-event">
				<div class="col-md-12 heading_event">
					<ul class="content-padding-details">
						<li><p class="text-center">Events</p></li>
					</ul>
				</div>
				<div class="col-md-12 event_data">
					
				</div>
				<div class="content-padding-details">
					<p>Thông tin Trận đấu</p>
				</div>
				<div class="last-content-padding">
					<p>Trọng tài: Nevalainen V. (Fin), Sân: Elbasan Arena (Elbasani)</p>
				</div>
				<div class="inner-footer text-center">
					<p>Gamble Responsibly. <a href="#">Gambling Therapy.</a> 18+</p>
				</div>
            </div>
			<!-- End Row -->



         </div> <!-- bg-clr -->
      </section>
      <!-- End Section -->
      <div class="entry-content">
         <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
         <?php the_content(); ?>
      </div>
   </article>
   <?php endwhile; endif; ?>
</main>
<script>

	jQuery(document).ready( $ => {
		
		let $id = "<?= $_GET['id']; ?>";

		// show loader when page loads
		let loader_div = $('.tab-content .loader').show();

		let today = new Date();
		let dd = String(today.getDate()).padStart(2, '0');
		let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
		let yyyy = today.getFullYear();

		let todays_date = yyyy+'-'+mm+'-'+dd;

		let ajaxurl = '/wp-admin/admin-ajax.php';

		$.ajax({

			type: "POST",
			url: ajaxurl,
			data: { 'action': 'data_by_date', date: todays_date }

		}).done( response => {

			let data = JSON.parse(response);

			let match_object;
			
			let  result = data.past_matches.match.filter(obj => {
				return obj.id === $id;
			});

			if(result.length == 0) {

				var result2 = data.present_matches.match.filter(obj => {
					return obj.id === $id;
				});

				if(result2.length == 0) {
				
					var result3 = data.future_matches.fixtures.filter(obj => {
						return obj.id === $id;
					});

					match_object = result3;

				} else {
					match_object = result2;
				}


			} else {
				match_object = result;
			}

			if(match_object.length != 0) {

				let home_name = match_object[0].home_name;
				let away_name = match_object[0].away_name;

				$('.home-team').html(home_name);
				$('.away-team').html(away_name);

				$('.hidden').removeClass('hidden');
				$('.hidden-event').removeClass('hidden-event');
				loader_div.hide();

			} else {

				loader_div.html('<br> Something went wrong <br><br>');

			}

		});

		$.ajax({

			type: "POST",
			url: ajaxurl,
			data: { 'action': 'match_events', id: $id }

		}).done( response_event => {
			
		
			if(response_event != 'null') {


				$('.heading_event').show();

				let data_events = JSON.parse(response_event);

				$.each(data_events.event, (index_of_events, events) => { 
					

					if(events.home_away == 'h') {
						dir = 'left';
					} else {
						dir = 'right';
					}

					let html = `

						<ul class="content-padding-score">
							<div class="`+dir+`-score">
								<li><p>`+events.time+`'</p></li>
								<li>`+events.player+`.</li>
								<li>`+events.event+`.</li>
							</div>
						</ul>
					
					`;
					

					$(html).appendTo( $('.event_data') );
					
				});

			}

			
		
		});

	});

</script>
<?php get_footer(); ?>