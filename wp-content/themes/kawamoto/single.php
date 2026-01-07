<?php get_header(); ?>

	<div class="c-mv">
		<h1 class="c_ttl pg_ttl">
			<span class="__en">
				<span class="__up">N</span>
				<span class="__up">E</span>
				<span class="__up">W</span>
				<span class="__up">S</span>
			</span>
			<span class="__ja">
				<span class="__up">お</span>
				<span class="__up">知</span>
				<span class="__up">ら</span>
				<span class="__up">せ</span>
			</span>
		</h1>
	</div>

	<div class="c-news-detail">
		<section class="c-news-detail__item">
			<div class="c-news-detail__info is-fade">
				<!-- categoryループ -->
				<?php
					$categories = get_the_category();
					if ( ! empty( $categories ) ) {
						$cat_name = $categories[0]->name;
						$cat_slug = $categories[0]->slug;
						echo '<span class="c-news-detail__category c-news-detail__category--' . esc_attr( $cat_slug ) . '">'
						. esc_html( $cat_name ) .
						'</span>';
					}
				?>
				<div class="c-news-detail__time"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></div>
			</div>
			<h2 class="c_ttl is-fade"><?php the_title(); ?></h2>
			<!--<div class="c-news-detail__img">
				<?php if ( has_post_thumbnail() ) : ?>
					<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="__img" loading="lazy">
				<?php else : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/common/img/common/pic_dummy.png" alt="no image" class="__img" loading="lazy">
				<?php endif; ?>
			</div>-->
			<div class="c-news-detail__contents is-fade"><?php the_content(); ?></div>
		</section>

		<div class="c-news-detail-pager">

			<?php
				$prev = get_previous_post();
				$prev_link = get_previous_post_link('%link', '前の記事へ');
				$prev_class = empty($prev) ? ' __none' : '';
			?>
			<div class="c-news-detail-pager__prev<?php echo $prev_class; ?>">
    			<?php echo $prev_link; ?>
			</div>

			<a class="c_btn" href="<?php echo home_url(); ?>/news/"><span class="__sub">一覧に戻る</span></a>

			<?php
				$next = get_next_post();
				$next_link = get_next_post_link('%link', '次の記事へ');
				$next_class = empty($next) ? ' __none' : '';
			?>
			<div class="c-news-detail-pager__next<?php echo $next_class; ?>">
    			<?php echo $next_link; ?>
			</div>

		</div>

	</div>

	<div class="c-breadcrumb">
		<div class="c-breadcrumb__inner">
			<a class="c-breadcrumb__item" href="<?php echo home_url(); ?>">
				<span class="__sub">ホーム</span>
			</a>
			<a class="c-breadcrumb__item" href="<?php echo home_url(); ?>/news/">
				<span class="__sub">お知らせ</span>
			</a>
        	<span class="c-breadcrumb__item __active"><?php the_title(); ?></span>
		</div>
    </div>

<?php get_footer(); ?>