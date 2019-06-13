$(document).ready( () => {

	$('.show_more_countries').click( e => {

		e.preventDefault();

		var $this = $(e.currentTarget);
		$('.nation_list').find('.d-none').removeClass('d-none');
		$this.remove();


	});

	$('.tournament-list li span.mini span.down-icon').click( e => {

		let $this = $(e.currentTarget);
		let li = $this.parent().parent().parent();
		li.toggleClass('active-torn');
		li.find('ul.sub-details').toggle();

		let carret = $this.children('i');

		let current_state = carret.hasClass('fa-chevron-down');

		if (current_state) {
			$this.children('i').attr('class', 'fa fa-chevron-up');
		} else {
			$this.children('i').attr('class', 'fa fa-chevron-down');
		}

	});
	

	$('ul.top-list li').click( e =>  {
		
		e.preventDefault();
		let $this = $(e.currentTarget);
		
		let loader_div = $this.find('a.main-anchor');

		if (loader_div.next().length > 0) { // already loaded leagues 

			$this.find('.drop-menu').toggle();

		} else { // loading leagues first time

			css_loader(loader_div, 'show', $);

			$.ajax({
				url: "/wp-admin/admin-ajax.php",
				method: "POST",
				data: { 'action': 'leagues_data', 'data': $this.attr('data-leagues') },
				success: response => {
	
					if(response.length > 5) {
						
						let dropdown = $(response).insertAfter(loader_div);
						dropdown.show();
	
					}
	
					css_loader(loader_div, 'hide', $);
				}
			});

		}
		
	});
	


	let today = new Date();
	let dd = String(today.getDate()).padStart(2, '0');
	let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	let yyyy = today.getFullYear();

	let todays_date = yyyy+'-'+mm+'-'+dd;

	if ($('body').hasClass('page-template-front_page')) {
		get_soccer_home_data(todays_date, $);
	}


});


const get_soccer_home_data = (date, $) => {

	let loader_div = $('.tab-content .loader');

	let ajaxurl = '/wp-admin/admin-ajax.php';

	$.ajax({
		
		type: "POST",
		url: ajaxurl,
		data: { 'action': 'data_by_date', date: date }

	}).done( response => {
		
		let data = JSON.parse(response);

		if ( data.past_matches.match.length > 0 ) {

			$.each(data.past_matches.match, (indexInArray, past_array) => { 

				let parent_league = $('[data-league="' + past_array.league_id + '"]');

				if (parent_league.length > 0) {
					
					let past_html = `
						<ul class="sub-details" data-type="past">
							<li>
								<a href="javascript: void(0)"
										onclick="window.open('/details/?id=`+ past_array.id +`', 
										'windowname1', 
										'width=660,height:600px'); 
										return false;"
									>
									<span class="checkbox-two"><input type="checkbox" value=""></span>
									<span class="win-detail">
										<span class="finish">`+ past_array.home_name + `</span>
									</span>
									<span class="points">`+ show_score(past_array.score, $) + `</span>
									<span class="goals-detail">
										<span class="team">`+ past_array.away_name + `</span>
										<span class="final-points">`+ show_score(past_array.ht_score, $) + `</span>
									</span>
								</a>
							</li>
						</ul>
					`;

					$(past_html).appendTo($('[data-league="' + past_array.league_id + '"]'));

				}


			});

		}

		if (data.present_matches.match.length > 0) {

			$.each(data.present_matches.match, (indexInArray, present_array) => { 
				
				let parent_league = $('[data-league="' + present_array.league_id + '"]');
				
				if (parent_league.length > 0) {
					
					let present_html = `
						<ul class="sub-details" data-type="present">
							<li>
								<a href="javascript: void(0)"
										onclick="window.open('/details/?id=`+ present_array.id +`', 
										'windowname1', 
										'width=660,height:600px'); 
										return false;"
									>
									<span class="checkbox-two"><input type="checkbox" value=""></span>
									<span class="win-detail">
										<span class="finish">`+ present_array.home_name +`</span>
									</span>
									<span class="points">`+ show_score(present_array.score, $) +`</span>
									<span class="goals-detail">
										<span class="team">`+ present_array.away_name +`</span>
										<span class="final-points">`+ show_score(present_array.ht_score, $) +`</span>
									</span>
								</a>
							</li>
						</ul>
					`;

					$(present_html).appendTo($('[data-league="' + present_array.league_id + '"]'));

				}
				
			});
				
		}


		if (data.future_matches.fixtures.length > 0) {
			
			$.each(data.future_matches.fixtures, (indexInArray, future_array) => { 

				let parent_league = $('[data-league="' + future_array.league_id + '"]');				

				if (parent_league.length > 0) {

					let future_html = `
							<ul class="sub-details" data-type="future">
								<li>
									<a href="javascript: void(0)"
										onclick="window.open('/details/?id=`+ future_array.id +`', 
										'windowname1', 
										'width=660,height:600px'); 
										return false;"
									>
										<span class="checkbox-two"><input type="checkbox" value=""></span>
										<span class="win-detail">
											<span class="finish">`+ future_array.time + `</span>
										</span>
										<span class="points">`+ future_array.home_name + `</span>
										<span class="goals-detail">
											<span class="team">`+ future_array.away_name + `</span>
											<span class="final-points"></span>
										</span>
									</a>
								</li>
							</ul>
						`;
	
					$(future_html).appendTo($('[data-league="' + future_array.league_id + '"]'));

				}

			});

		}

		$('.tournament-list > li').each( (index, element) => {
			
			let el = $(element);
			let subdetails = el.find('.sub-details');

			if (subdetails.length == 0)  {

				el.remove();

			}



		});


		loader_div.hide();
		$('#profile').addClass('in active show');
		
		// $('.tournament-list li:nth-child(odd)').find('.down-icon').trigger('click');

		$('.tournament-list li').find('.down-icon').trigger('click');

		$('.nav-link').removeClass('disableda');

	} );

	$('.nav-item .nav-link').click( e => { 
		e.preventDefault();

		let $this = $(e.currentTarget);
		let $type = $this.attr('data-data');
		
		$this.parent().parent().find('.active').removeClass('active');

		$this.addClass('active');

		let loader_div = $('.tab-content .loader');
		let data_div = $('#profile');

		loader_div.show();
		data_div.hide();
		
		if ($type == 'all') {

			$('[data-type]').show();
			$('[data-type]').parent().show();

		} else {

			$('[data-type]').hide();
			$('[data-type]').parent().hide();
	
			$('[data-type="' + $type + '"]').show();
			$('[data-type="' + $type + '"]').parent().show();

		}

		loader_div.hide();
		data_div.show();
		
	});
	
	
}	

const css_loader = (el, action, $) => {

	if (action == 'hide') { // show loader
		el.find('.lds-ring').remove();
	} else { // hide loader
		
		let loader = $('<div class="lds-ring"><div></div><div></div><div></div><div></div></div>');
		loader.appendTo(el);

	}

}

const show_score = (score, $) => {
	
	let original_score;
	if (score == "") {
		original_score = '-';
	} else {
		original_score = '(' + score + ')';
	}

	return original_score;

}



