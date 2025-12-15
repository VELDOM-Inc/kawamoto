<?php get_header(); ?>

    <div class="c-mv c-mv__works-detail">
		<h1 class="c_ttl pg_ttl">
			<span class="__en">
				<span class="__up">C</span>
				<span class="__up">O</span>
				<span class="__up">N</span>
				<span class="__up">T</span>
				<span class="__up">A</span>
				<span class="__up">C</span>
				<span class="__up">T</span>
			</span>
			<span class="__ja">
				<span class="__up">お</span>
				<span class="__up">問</span>
				<span class="__up">い</span>
				<span class="__up">合</span>
				<span class="__up">わ</span>
				<span class="__up">せ</span>
			</span>
		</h1>
	</div>

	<div class="c-contact __confirm">

		<div class="c-contact-form">

			<div class="c-contact-form__step __step02">
				<div class="c-contact-form__step--list __current">入力</div>
				<div class="c-contact-form__step--list __current">確認</div>
				<div class="c-contact-form__step--list">完了</div>
			</div>

			<p class="c-contact-form__sub">下記の内容をご確認の上、【この内容で送信する】ボタンをクリックしてください</p>

			<div class="c-contact-form__inner">
				<?php echo do_shortcode('[contact-form-7 id="f92074c" title="お問い合わせ-確認画面"]'); ?>
			</div>

		</div>

    </div>

	<div class="c-breadcrumb">
		<div class="c-breadcrumb__inner">
			<a class="c-breadcrumb__item" href="<?php echo home_url(); ?>">
				<span class="__sub">ホーム</span>
			</a>
        	<span class="c-breadcrumb__item __active">お問い合わせ</span>
		</div>
    </div>

<?php get_footer(); ?>