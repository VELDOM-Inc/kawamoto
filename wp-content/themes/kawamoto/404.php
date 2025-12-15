<?php get_header(); ?>

  <div class="c-mv">
		<h1 class="c_ttl pg_ttl">
			<span class="__en">
				<span class="__up">4</span>
				<span class="__up">0</span>
				<span class="__up">4</span>
				<span class="__up __space">&nbsp;</span>
				<span class="__up">N</span>
				<span class="__up">O</span>
				<span class="__up">T</span>
				<span class="__up __space">&nbsp;</span>
				<span class="__up">F</span>
				<span class="__up">O</span>
				<span class="__up">U</span>
				<span class="__up">N</span>
				<span class="__up">D</span>
			</span>
			<span class="__ja">
				<span class="__up">お</span>
				<span class="__up">探</span>
				<span class="__up">し</span>
				<span class="__up">の</span>
				<span class="__up">ペ</span>
				<span class="__up">ー</span>
				<span class="__up">ジ</span>
				<span class="__up">が</span>
				<span class="__up">見</span>
				<span class="__up">つ</span>
        <span class="__up">か</span>
				<span class="__up">り</span>
        <span class="__up">ま</span>
				<span class="__up">せ</span>
        <span class="__up">ん</span>
			</span>
		</h1>
	</div>

  <div class="c-error">
    <p class="c-error__txt">お探しのページは一時的に<br class="u-sm-max">アクセスができない状況にあるか、<br>移動もしくは削除された可能性があります。<br>お手数ではございますが、<br class="u-sm-max">トップにて目的のページをお探しください。</p>
    <a class="c_btn" href="<?php echo home_url(); ?>"><span class="__sub">ホームに戻る</span></a>
  </div>

  <div class="c-breadcrumb">
		<div class="c-breadcrumb__inner">
			<a class="c-breadcrumb__item" href="<?php echo home_url(); ?>">
				<span class="__sub">ホーム</span>
			</a>
      <span class="c-breadcrumb__item __active">お探しのページが見つかりません</span>
		</div>
  </div>

<?php get_footer(); ?>