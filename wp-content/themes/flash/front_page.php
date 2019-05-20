<?php
	 
	 /* Template Name: Home Template */
	get_header(); 
	$country_array = json_decode('{ "US-": "USA", "BD": "Bangladesh", "BE": "Belgium", "BF": "Burkina Faso", "BG": "Bulgaria", "BA": "Bosnia and Herzegovina", "BB": "Barbados", "WF": "Wallis and Futuna", "BL": "Saint Barthelemy", "BM": "Bermuda", "BN": "Brunei", "BO": "Bolivia", "BH": "Bahrain", "BI": "Burundi", "BJ": "Benin", "BT": "Bhutan", "JM": "Jamaica", "BV": "Bouvet Island", "BW": "Botswana", "WS": "Samoa", "BQ": "Bonaire, Saint Eustatius and Saba ", "BR": "Brazil", "BS": "Bahamas", "JE": "Jersey", "BY": "Belarus", "BZ": "Belize", "RU": "Russia", "RW": "Rwanda", "RS": "Serbia", "TL": "East Timor", "RE": "Reunion", "TM": "Turkmenistan", "TJ": "Tajikistan", "RO": "Romania", "TK": "Tokelau", "GW": "Guinea-Bissau", "GU": "Guam", "GT": "Guatemala", "GS": "South Georgia and the South Sandwich Islands", "GR": "Greece", "GQ": "Equatorial Guinea", "GP": "Guadeloupe", "JP": "Japan", "GY": "Guyana", "GG": "Guernsey", "GF": "French Guiana", "GE": "Georgia", "GD": "Grenada", "GB": "United Kingdom", "GA": "Gabon", "SV": "El Salvador", "GN": "Guinea", "GM": "Gambia", "GL": "Greenland", "GI": "Gibraltar", "GH": "Ghana", "OM": "Oman", "TN": "Tunisia", "JO": "Jordan", "HR": "Croatia", "HT": "Haiti", "HU": "Hungary", "HK": "Hong Kong", "HN": "Honduras", "HM": "Heard Island and McDonald Islands", "VE": "Venezuela", "PR": "Puerto Rico", "PS": "Palestinian Territory", "PW": "Palau", "PT": "Portugal", "SJ": "Svalbard and Jan Mayen", "PY": "Paraguay", "IQ": "Iraq", "PA": "Panama", "PF": "French Polynesia", "PG": "Papua New Guinea", "PE": "Peru", "PK": "Pakistan", "PH": "Philippines", "PN": "Pitcairn", "PL": "Poland", "PM": "Saint Pierre and Miquelon", "ZM": "Zambia", "EH": "Western Sahara", "EE": "Estonia", "EG": "Egypt", "ZA": "South Africa", "EC": "Ecuador", "IT": "Italy", "VN": "Vietnam", "SB": "Solomon Islands", "ET": "Ethiopia", "SO": "Somalia", "ZW": "Zimbabwe", "SA": "Saudi Arabia", "ES": "Spain", "ER": "Eritrea", "ME": "Montenegro", "MD": "Moldova", "MG": "Madagascar", "MF": "Saint Martin", "MA": "Morocco", "MC": "Monaco", "UZ": "Uzbekistan", "MM": "Myanmar", "ML": "Mali", "MO": "Macao", "MN": "Mongolia", "MH": "Marshall Islands", "MK": "Macedonia", "MU": "Mauritius", "MT": "Malta", "MW": "Malawi", "MV": "Maldives", "MQ": "Martinique", "MP": "Northern Mariana Islands", "MS": "Montserrat", "MR": "Mauritania", "IM": "Isle of Man", "UG": "Uganda", "TZ": "Tanzania", "MY": "Malaysia", "MX": "Mexico", "IL": "Israel", "FR": "France", "IO": "British Indian Ocean Territory", "SH": "Saint Helena", "FI": "Finland", "FJ": "Fiji", "FK": "Falkland Islands", "FM": "Micronesia", "FO": "Faroe Islands", "NI": "Nicaragua", "NL": "Netherlands", "NO": "Norway", "NA": "Namibia", "VU": "Vanuatu", "NC": "New Caledonia", "NE": "Niger", "NF": "Norfolk Island", "NG": "Nigeria", "NZ": "New Zealand", "NP": "Nepal", "NR": "Nauru", "NU": "Niue", "CK": "Cook Islands", "XK": "Kosovo", "CI": "Ivory Coast", "CH": "Switzerland", "CO": "Colombia", "CN": "China", "CM": "Cameroon", "CL": "Chile", "CC": "Cocos Islands", "CA": "Canada", "CG": "Republic of the Congo", "CF": "Central African Republic", "CD": "Democratic Republic of the Congo", "CZ": "Czech Republic", "CY": "Cyprus", "CX": "Christmas Island", "CR": "Costa Rica", "CW": "Curacao", "CV": "Cape Verde", "CU": "Cuba", "SZ": "Swaziland", "SY": "Syria", "SX": "Sint Maarten", "KG": "Kyrgyzstan", "KE": "Kenya", "SS": "South Sudan", "SR": "Suriname", "KI": "Kiribati", "KH": "Cambodia", "KN": "Saint Kitts and Nevis", "KM": "Comoros", "ST": "Sao Tome and Principe", "SK": "Slovakia", "KR-": "Republic of Korea", "KR": "South Korea", "SI": "Slovenia", "KP": "North Korea", "KW": "Kuwait", "SN": "Senegal", "SM": "San Marino", "SL": "Sierra Leone", "SC": "Seychelles", "KZ": "Kazakhstan", "KY": "Cayman Islands", "SG": "Singapore", "SE": "Sweden", "SD": "Sudan", "DO": "Dominican Republic", "DM": "Dominica", "DJ": "Djibouti", "DK": "Denmark", "VG": "British Virgin Islands", "DE": "Germany", "YE": "Yemen", "DZ": "Algeria", "US": "United States", "UY": "Uruguay", "YT": "Mayotte", "UM": "United States Minor Outlying Islands", "LB": "Lebanon", "LC": "Saint Lucia", "LA": "Laos", "TV": "Tuvalu", "TW": "Taiwan", "TT": "Trinidad and Tobago", "TR": "Turkey", "LK": "Sri Lanka", "LI": "Liechtenstein", "LV": "Latvia", "TO": "Tonga", "LT": "Lithuania", "LU": "Luxembourg", "LR": "Liberia", "LS": "Lesotho", "TH": "Thailand", "TF": "French Southern Territories", "TG": "Togo", "TD": "Chad", "TC": "Turks and Caicos Islands", "LY": "Libya", "VA": "Vatican", "VC": "Saint Vincent and the Grenadines", "AE": "United Arab Emirates", "AD": "Andorra", "AG": "Antigua and Barbuda", "AF": "Afghanistan", "AI": "Anguilla", "VI": "U.S. Virgin Islands", "IS": "Iceland", "IR": "Iran", "AM": "Armenia", "AL": "Albania", "AO": "Angola", "AQ": "Antarctica", "AS": "American Samoa", "AR": "Argentina", "AU": "Australia", "AT": "Austria", "AW": "Aruba", "IN": "India", "AX": "Aland Islands", "AZ": "Azerbaijan", "IE": "Ireland", "ID": "Indonesia", "UA": "Ukraine", "QA": "Qatar", "MZ": "Mozambique"}', true);	
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
									
									<?php
										
										$leanguesRequest = wp_remote_get('http://livescore-api.com/api-client/fixtures/leagues.json?key=9GKXlzHjoF6v3mlO&secret=ah65KoQi7lmDlWyvDisYS9igOoMSL8GV');
										$leagues = json_decode($leanguesRequest['body']);

									?>

									<?php  foreach ($leagues->data->leagues as $key => $leag): 
										
										// $country_code = str_replace('-', '', array_search ($leag->country_name, $country_array));

									?>
										<li class="top-li" data-league="<?= $leag->league_id; ?>">
											<div class="content-padding">
												
												<?php /* <span class="flag-icon flag-icon-<?= strtolower($country_code); ?>"></span> */ ?>
												<span class="tournament"> <strong><?= $leag->country_name; ?></strong>: <a href="#"><?= $leag->league_name; ?></a></span>
												<span class="mini">
													<span class="down-icon"><i class="fa fa-chevron-down"></i></span>
												</span>
											</div>
										</li>
									<?php endforeach;  ?>
									
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