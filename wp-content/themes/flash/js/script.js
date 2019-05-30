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
	
	$('.tournament-list li:nth-child(odd)').find('.down-icon').trigger('click');

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

	get_soccer_home_data(todays_date, $);

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

		let past_html = '';

		if ( data.past_matches.match.length > 0 ) {


			$.each(data.past_matches.match, (indexInArray, past_array) => { 

				past_html += `
					<ul class="sub-details">
						<li>
							<a href="#">
								<span class="checkbox-two"><input type="checkbox" value=""></span>
								<span class="win-detail">
									<span class="finish">`+ past_array.home_name +`</span>
								</span>
								<span class="points">`+ past_array.ft_score +`</span>
								<span class="goals-detail">
									<span class="team">`+ past_array.away_name +`</span>
									<span class="final-points">(`+ past_array.ht_score +`)</span>
								</span>
							</a>
						</li>
					</ul>
				`;

			});

		}

		
		console.log();






	} );
	
}	

const css_loader = (el, action, $) => {

	if (action == 'hide') { // show loader
		el.find('.lds-ring').remove();
	} else { // hide loader
		
		let loader = $('<div class="lds-ring"><div></div><div></div><div></div><div></div></div>');
		loader.appendTo(el);

	}

}




