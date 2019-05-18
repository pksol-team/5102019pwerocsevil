<!-- <div class="side-box">
	<h1><i class="fa fa-star" aria-hidden="true"></i> Giải đấu Của tôi</h1>
	<ul class="top-list">
		<li><a href="#"><span><img src="https://www.flashscore.vn/res/image/country_flags/world.png"></span> <span>Ngoại hạng Anh</span> <span><i class="fa fa-times" aria-hidden="true"></i></span></a></li>
		<li><a href="#"><span><img src="https://www.flashscore.vn/res/image/country_flags/world.png"></span> <span>Ngoại hạng Anh</span> <span><i class="fa fa-times" aria-hidden="true"></i></span></a></li>
		<li><a href="#"><span><img src="https://www.flashscore.vn/res/image/country_flags/world.png"></span> <span>Ngoại hạng Anh</span> <span><i class="fa fa-times" aria-hidden="true"></i></span></a></li>
		<li><a href="#"><span><img src="https://www.flashscore.vn/res/image/country_flags/world.png"></span> <span>Ngoại hạng Anh</span> <span><i class="fa fa-times" aria-hidden="true"></i></span></a></li>
		<li><a href="#"><span><img src="https://www.flashscore.vn/res/image/country_flags/world.png"></span> <span>Ngoại hạng Anh</span> <span><i class="fa fa-times" aria-hidden="true"></i></span></a></li>
		<li><a href="#"><span><img src="https://www.flashscore.vn/res/image/country_flags/world.png"></span> <span>Ngoại hạng Anh</span> <span><i class="fa fa-times" aria-hidden="true"></i></span></a></li>
		<li><a href="#"><span><img src="https://www.flashscore.vn/res/image/country_flags/world.png"></span> <span>Ngoại hạng Anh</span> <span><i class="fa fa-times" aria-hidden="true"></i></span></a></li>
	</ul>
</div>
<br> -->
<!-- <div class="side-box">
	<h1><i class="fa fa-star" aria-hidden="true"></i> Giải đấu Của tôi</h1>
	<div class="box-para">
		<p>Để chọn một đội bóng, bạn chỉ cần click vào biểu tượng <i class="fa fa-star" aria-hidden="true"></i> bên cạnh tên đội bóng trên trang dành cho đội bóng đó.</p>
	</div>
</div>
<br> -->
<div class = "side-box side-box-nc">
	<h1> Quốc gia </h1>
	<ul class="top-list nation_list">

		<?php
			$countriesRequest = wp_remote_get('http://livescore-api.com/api-client/countries/list.json?key=9GKXlzHjoF6v3mlO&secret=ah65KoQi7lmDlWyvDisYS9igOoMSL8GV');

			$nations = json_decode($countriesRequest['body']);

		?>

		<?php foreach ($nations->data->country as $key => $nation): ?>

			<?php if ($nation->is_real == '1'): ?>
				<li <?php
					if($key > 15)
					echo 'class="d-none"';
					?> data-leagues="<?= $nation->leagues; ?>">
						<a href="#" class="main-anchor"><?= $nation->name; ?></a>
					</li>
				<?php endif ?>
			<?php endforeach; ?>
		<li class="show_more_countries"> <a href="#">Thêm</a></li>

	</ul>
</div>