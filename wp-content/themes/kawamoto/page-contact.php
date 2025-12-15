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

	<div class="c-contact">

		<section class="c-contact-tel">
			<h2 class="c_ttl">
				<span class="__en">
					<span class="__up">C</span>
					<span class="__up">A</span>
					<span class="__up">L</span>
					<span class="__up">L</span>
				</span>
				<span class="__ja">
					<span class="__up">お</span>
					<span class="__up">電</span>
					<span class="__up">話</span>
					<span class="__up">で</span>
					<span class="__up">の</span>
				</span>
				<span class="__ja">
					<span class="__up">お</span>
					<span class="__up">問</span>
					<span class="__up">い</span>
					<span class="__up">合</span>
					<span class="__up">わ</span>
					<span class="__up">せ</span>
				</span>
			</h2>
			<div class="c-contact-tel__link">
				<a class="__link" href="tel:097-529-7061">097-529-7061</a>
				<div class="c-contact-tel__quote">受付時間／9:00～17:00（月～金曜日）</div>
			</div>
		</section>

		<section class="c-contact-form">

			<h2 class="c_ttl">
				<span class="__en">
					<span class="__up">F</span>
					<span class="__up">O</span>
					<span class="__up">A</span>
					<span class="__up">M</span>
				</span>
				<span class="__ja">
					<span class="__up">フ</span>
					<span class="__up">ォ</span>
					<span class="__up">ー</span>
					<span class="__up">ム</span>
					<span class="__up">で</span>
					<span class="__up">の</span>
					<span class="__up">お</span>
					<span class="__up">問</span>
					<span class="__up">い</span>
					<span class="__up">合</span>
					<span class="__up">わ</span>
					<span class="__up">せ</span>
				</span>
			</h2>
			<p class="c-contact-form__sub">下記のお問い合わせフォームよりお気軽にご相談ください。</p>
			<p class="c-contact-form__txt">当ページでのお問い合わせについては、3営業日以内に返信させていただいております。</p>
			<p class="c-contact-form__quote">3営業日を過ぎても当社から何もアクセスがない場合は、当社へ直接お電話（TEL／<a class="__tel" href="tel:097-529-7061">097-529-7061</a>）ください。<br>ご記入いただいたメールアドレスの誤記やメール受信設定等が原因でお客様にメールを返信できない場合があります。<br><span class="__required">※</span>は必須項目です。</p>

			<div class="c-contact-form__step __step01">
				<div class="c-contact-form__step--list __current">入力</div>
				<div class="c-contact-form__step--list">確認</div>
				<div class="c-contact-form__step--list">完了</div>
			</div>

			<div class="c-contact-form__inner">
				<?php echo do_shortcode('[contact-form-7 id="125d587" title="お問い合わせ" html_class="h-adr"]'); ?>
			</div>

		</section>

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