<?php get_header(); ?>

	<div class="c-mv c-mv__works-detail">
		<h1 class="c_ttl pg_ttl">
			<span class="__en">
				<span class="__up">W</span>
				<span class="__up">O</span>
				<span class="__up">R</span>
				<span class="__up">K</span>
				<span class="__up">S</span>
			</span>
			<span class="__ja">
				<span class="__up">実</span>
				<span class="__up">績</span>
				<span class="__up">紹</span>
				<span class="__up">介</span>
			</span>
		</h1>
	</div>

	<div class="c-works-detail">

		<div class="c-works-detail__inner">
			
			<div class="c-works-detail-item">
				<div class="c-works-detail-item__slider">
					<div class="c-works-detail-item__info u-sm-max">
						<div class="c-works-detail-item__time"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></div>
						<?php
						$terms = get_the_terms( get_the_ID(), 'works_category' );
						if ( !empty($terms) && !is_wp_error($terms) ) {
							$term_name = $terms[0]->name;
							$term_slug = $terms[0]->slug;
							echo '<span class="c-works-detail-item__category c-works-detail-item__category--' . esc_attr($term_slug) . '">'
							. esc_html($term_name) .
							'</span>';
						}
						?>
					</div>
					<h2 class="c-works-detail-item__ttl u-sm-max"><?php the_title(); ?></h2>
					<div class="c-works-detail-item__slider--inner">
						<?php if(have_rows('slider')): ?>
                        <?php while(have_rows('slider')): the_row(); ?>
							<div class="c-works-detail-item__slider--img"><img src="<?php the_sub_field('slide_img'); ?>" alt="" class="__img"></div>
						<?php endwhile; ?>
                        <?php else: ?>
							<div class="c-works-detail-item__slider--img"><img src="<?php echo get_template_directory_uri(); ?>/common/img/common/pic_dummy.png" alt="no image" class="__img"></div>
						<?php endif; ?>
					</div>
					<div class="c-works-detail-item__slider--controller">
						<div class="c-works-detail-item__slider--btn"></div>
						<div class="c-works-detail-item__slider--number"></div>
					</div>
				</div>
				<section class="c-works-detail-item__result">
					<div class="c-works-detail-item__info u-sm-min">
						<div class="c-works-detail-item__time"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></div>
						<?php
						$terms = get_the_terms( get_the_ID(), 'works_category' );
						if ( !empty($terms) && !is_wp_error($terms) ) {
							$term_name = $terms[0]->name;
							$term_slug = $terms[0]->slug;
							echo '<span class="c-works-detail-item__category c-works-detail-item__category--' . esc_attr($term_slug) . '">'
							. esc_html($term_name) .
							'</span>';
						}
						?>
					</div>
					<h2 class="c-works-detail-item__ttl u-sm-min"><?php the_title(); ?></h2>
					<div class="c-works-detail-item__contents"><?php the_content(); ?></div>
					<dl class="c-works-detail-item__table">
						<?php if( get_field('year') ):?>
						<div class="c-works-detail-item__table--inner">
							<dt class="c-works-detail-item__table--ttl">施工年</dt>
							<dd class="c-works-detail-item__table--txt"><?php the_field('year'); ?></dd>
						</div>
						<?php endif; ?>
						<?php if( get_field('area') ):?>
						<div class="c-works-detail-item__table--inner">
							<dt class="c-works-detail-item__table--ttl">エリア</dt>
							<dd class="c-works-detail-item__table--txt"><?php the_field('area'); ?></dd>
						</div>
						<?php endif; ?>
						<?php if( get_field('info') ):?>
						<div class="c-works-detail-item__table--inner">
							<dt class="c-works-detail-item__table--ttl">施工内容</dt>
							<dd class="c-works-detail-item__table--txt"><?php the_field('info'); ?></dd>
						</div>
						<?php endif; ?>
					</dl>
				</section>
			</div>

		</div>

	</div>

	<a class="c_btn __return" href="<?php echo home_url(); ?>/works/"><span class="__sub">一覧に戻る</span></a>

	<div class="c-breadcrumb">
		<div class="c-breadcrumb__inner">
			<a class="c-breadcrumb__item" href="<?php echo home_url(); ?>">
				<span class="__sub">ホーム</span>
			</a>
			<a class="c-breadcrumb__item" href="<?php echo home_url(); ?>/works/">
				<span class="__sub">実績紹介</span>
			</a>
        	<span class="c-breadcrumb__item __active"><?php the_title(); ?></span>
		</div>
    </div>

<?php get_footer(); ?>