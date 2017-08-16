<?php include 'header.php'; ?>

		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-menu" viewBox="0 0 24 24">
				<title>menu</title>
				<path d="M23.8,6H0.1V3h23.7C23.8,3,23.8,6,23.8,6z M23.8,10.5H0.1v3h23.7C23.8,13.5,23.8,10.5,23.8,10.5z M24,18H10v3h14V18z"/>
			</symbol>
			<symbol id="icon-menu-alt" viewBox="0 0 24 24">
				<title>menu alt</title>
				<path d="M10.4,6H0V3h10.4C10.4,3,10.4,6,10.4,6z M10.4,10.5H0v3h10.4C10.4,13.5,10.4,10.5,10.4,10.5z M15.1,18H9v3h6.1V18z M23.4,6H13V3h10.4C23.4,3,23.4,6,23.4,6z M23.4,10.5H13v3h10.4C23.4,13.5,23.4,10.5,23.4,10.5z M23.5,18h-6.1v3h6.1V18z"/>
			</symbol>
		</svg>
		<main>
			<div class="pieces" style="background-image: url(img/normal3.jpg)" data-img-alt="url(img/alt1.jpg)" data-img-code="url(img/code1.jpg)"></div>
			<div class="overlay overlay--hidden"></div>
			<div class="content">
				<div class="content__inner">
					<div class="content__top">
						<h2 class="title">
							<span class="title__inner mode mode--design" data-switch data-glitch>Dhawal Mehta</span>
						</h2>
						<div class="controls">
							<button class="btn btn--menu mode mode--design" data-switch>
								<!-- <svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg>
								<svg class="icon icon--menu-alt"><use xlink:href="#icon-menu-alt"></use></svg> -->
							</button>
						</div>
					</div>
					<div class="menu">
						<ul class="menu__inner">
							<li class="menu__item"><a class="menu__link" data-switch>On Interface Design</a></li>
							<li class="menu__item"><a class="menu__link" data-switch>Portfolio</a></li>
							<li class="menu__item"><a class="menu__link" data-switch>Case Studies</a></li>
							<li class="menu__item"><a class="menu__link" data-switch>Musings</a></li>
						</ul>
					</div>
					<div class="menu menu--code">
						<ul class="menu__inner">
							<li class="menu__item"><a class="menu__link" data-switch>On Coding</a></li>
							<li class="menu__item"><a class="menu__link" data-switch>Experiments</a></li>
							<li class="menu__item"><a class="menu__link" data-switch>Current Projects</a></li>
							<li class="menu__item"><a class="menu__link" data-switch>Tutorials</a></li>
							<li class="menu__item"><a class="menu__link" data-switch>> Find me on GitHub</a></li>
						</ul>
					</div>
					<div class="content__bottom">
						<div class="switch mode mode--design">
							<a class="switch__item switch__item--current">Guitarist</a>
							<a class="switch__item"><span class="mode mode--design" data-switch data-glitch>Developer</span></a>
						</div>
						<div class="link-wrap">
							<a class="contact-link mode mode--design" data-switch data-glitch>Work with me</a>
						</div>
					</div>
				</div><!-- /content__inner-->
			</div><!-- /content -->
			<div class="loading"></div>
		</main>

<?php include 'footer.php'; ?>
