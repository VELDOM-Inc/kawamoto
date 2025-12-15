<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="keywords" content="">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Zen+Kaku+Gothic+New&family=Zen+Old+Mincho&display=swap" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/common/img/common/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/common/img/common/apple_touch_icon.png">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<!-- .t-wrap -->
		<div class="t-wrap">

			<!-- .l-header -->
		<header class="l-header is-home">
			<div class="l-header__inner">
				<a class="l-header-logo __opacity" href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/common/img/common/logo.svg" alt="株式会社河本建設工業" class="__img">
				</a>
				<div class="l-header-nav">
					<nav class="l-header-nav__list">
						<ul class="l-header-nav__center">
							<li class="l-header-nav__center__item">
								<a class="l-header-nav__link __current" href="<?php echo home_url(); ?>">トップページ</a>
							</li>
							<li class="l-header-nav__center__item">
								<a class="l-header-nav__link" href="<?php echo home_url(); ?>/news/">お知らせ</a>
							</li>
							<li class="l-header-nav__center__item">
								<a class="l-header-nav__link" href="<?php echo home_url(); ?>/company/">会社情報</a>
							</li>
							<li class="l-header-nav__center__item">
								<a class="l-header-nav__link" href="<?php echo home_url(); ?>/works/">実績紹介</a>
							</li>
							<li class="l-header-nav__center__item">
								<a class="l-header-nav__link" href="<?php echo home_url(); ?>/service/">事業内容</a>
							</li>
							<li class="l-header-nav__center__item">
								<a class="l-header-nav__link" href="<?php echo home_url(); ?>/recruit/">採用情報</a>
							</li>
						</ul>
					</nav>
					<div class="l-header-nav-sp">
						<div class="l-header-nav-sp__toggle">
							<span class="__sub"></span>
							<span class="__sub"></span>
							<span class="__sub"></span>
						</div>
						<nav class="l-header-nav-sp__list">
							<div class="l-header-nav-sp__list__inner">
								<div class="l-header-nav-sp__list--item">
									<a href="<?php echo home_url(); ?>" class="__link">ホーム</a>
								</div>
								<div class="l-header-nav-sp__list--item">
									<a href="<?php echo home_url(); ?>/news/" class="__link">お知らせ</a>
								</div>
								<div class="l-header-nav-sp__list--item __toggle">
									<div class="__inner">会社情報</div>
									<div class="l-header-nav-sp__list--sub">
										<div class="l-header-nav-sp__list--sub-inner">
											<a href="<?php echo home_url(); ?>/company/#message" class="__link">ご挨拶</a>
											<a href="<?php echo home_url(); ?>/company/#overview" class="__link">会社概要</a>
											<a href="<?php echo home_url(); ?>/company/#access" class="__link">アクセス</a>
											<a href="<?php echo home_url(); ?>/company/#history" class="__link">沿革</a>
										</div>
									</div>
								</div>
								<div class="l-header-nav-sp__list--item">
									<a href="<?php echo home_url(); ?>/works/" class="__link">実績紹介</a>
								</div>
								<div class="l-header-nav-sp__list--item __toggle">
									<div class="__inner">事業内容</div>
									<div class="l-header-nav-sp__list--sub">
										<div class="l-header-nav-sp__list--sub-inner">
											<a href="<?php echo home_url(); ?>/service/#service01" class="__link">足場工事</a>
											<a href="<?php echo home_url(); ?>/service/#service02" class="__link">橋梁工事</a>
											<a href="<?php echo home_url(); ?>/service/#service03" class="__link">プラント工事</a>
											<a href="<?php echo home_url(); ?>/service/#service04" class="__link">鍛冶工事</a>
											<a href="<?php echo home_url(); ?>/service/#service05" class="__link">鋼構造物工事</a>
											<a href="<?php echo home_url(); ?>/service/#service06" class="__link">機械器具設置工事</a>
											<a href="<?php echo home_url(); ?>/service/#service07" class="__link">解体工事</a>
											<a href="<?php echo home_url(); ?>/service/#review" class="__link">お客様の声</a>
										</div>
									</div>
								</div>
								<div class="l-header-nav-sp__list--item __toggle">
									<div class="__inner">採用情報</div>
									<div class="l-header-nav-sp__list--sub">
										<div class="l-header-nav-sp__list--sub-inner">
											<a href="<?php echo home_url(); ?>/recruit/#message" class="__link">採用ご挨拶</a>
											<a href="<?php echo home_url(); ?>/recruit/#number" class="__link">数字で見る<br>河本建設工業</a>
											<a href="<?php echo home_url(); ?>/recruit/#benefit" class="__link">福利厚生</a>
											<a href="<?php echo home_url(); ?>/recruit/#support" class="__link">資格取得支援事例</a>
											<a href="<?php echo home_url(); ?>/recruit/#interview" class="__link">社員インタビュー</a>
											<a href="<?php echo home_url(); ?>/recruit/#schedule" class="__link">1日のスケジュール</a>
											<a href="<?php echo home_url(); ?>/recruit/#guideline" class="__link">募集要項</a>
											<a href="<?php echo home_url(); ?>/recruit/#entry" class="__link">エントリー</a>
										</div>
									</div>
								</div>
								<div class="l-header-nav-sp__list--item">
									<a href="<?php echo home_url(); ?>/contact/" class="__link">お問い合わせ</a>
								</div>
								<div class="l-header-nav-sp__list--item">
									<a href="<?php echo home_url(); ?>/privacy-policy/" class="__link">プライバシーポリシー</a>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<a class="l-header-contact" href="<?php echo home_url(); ?>/contact/">お問い合わせ</a>
			</div>
		</header>
		<!-- /.l-header -->
			
		<!-- .l-contents -->
		<main class="l-contents<?php if ( !is_front_page() ) : ?> page-contents<?php endif; ?>">
