<header class="header">
	<div class="container">
		<div class="header__inner">
			<div class="header__side header__side_left">
				<div class="header__logos">
					<img class="" src="img/header/logo.svg" alt="Synergy">
				</div>
			</div>

			<div class="header__side header__side_right">
				<?php if ($version != 'stavropol') { ?>
				<nav class="header__nav">
					<div class="header__links" id="header-links">
						<a class="scroll" href="#about">О&nbsp;форуме</a>
						<a class="scroll" href="#speakers">Спикеры</a>
						<?php if ($version != 'version2') { ?>
							<?php /* ?>
							<a class="scroll" href="#price">Стоимость участия</a> 
							<?php */ ?>
						<?php }?>
						<a class="scroll" href="#place">Место проведения</a>
						<a class="scroll" href="#how">Как это было?</a>
						<a class="scroll" href="#organizer">Организаторы</a>
					</div>
				</nav>
				<?php } ?>
			</div>
			<div class="header__wrap">
				<div class="header__contacts">
					<a href="tel:<?=$phone_link?>" class="header__phone"><span>
							<?=$phone?>
						</span></a>
					<a href="tel:<?=$phone_link?>" class="header__phone-icon"><img src="img/header/phone.svg" alt=""></a>
					<a href="mailto:<?=$email?>" class="header__mail"><span>
							<?=$email?>
						</span></a>
				</div>

				<?php if ($version == 'stavropol') { ?>
					<a class="header__button button" data-fancybox data-src="#popup-reg">Принять участие</a>
				<?php }?>


				<?php if ($version != 'stavropol') { ?>
				<svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50">
					<!-- data-fancybox data-src="#mobile-menu" -->
					<path class="line top"
						d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
					<path class="line middle" d="m 30,50 h 40" />
					<path class="line bottom"
						d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
				</svg>
				<?php } ?>
			</div>
		</div>
	</div>
</header>
