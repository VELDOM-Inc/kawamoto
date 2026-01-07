<?php get_header(); ?>

	<div class="c-index-visual">
		<h1 class="c-index-visual__catch">はじまりは、ここから</h1>
		<div class="c-index-visual__img">
			<picture class="__pic">
				<source media="(max-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_mv_sp.png">
				<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_mv.png" alt="大分市の風景" class="__img">
			</picture>
		</div>
	</div>

	<div class="c-index-news">
		<section class="c-index-news__info">
			<h2 class="c-index-news__info--ttl is-fade">お知らせ</h2>
			<div class="c-index-news__info--btn is-fade"></div>
		</section>
		<div class="c-index-news-slider is-fade">
			<?php
        		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
            	$args = array(
                	'post_type' => 'post',
                	'posts_per_page' => 5,
                	'paged' => $paged
            	);
            	$the_query = new WP_Query($args);
            	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
    		?>
			<a class="c-index-news-slider__item" href="<?php the_permalink(); ?>">
				<div class="c-index-news-slider__item--inner">
					<div class="c-index-news-slider__item--info">
						<?php
							$category = get_the_category();
							$cat_name = $category[0]->name;
							$cat_slug = $category[0]->slug;
						?>
						<span class="__category"><?php echo esc_html( $cat_name ); ?></span>
						<span class="__time"><time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time></span>
					</div>
					<div class="c-index-news-slider__item--img">
						<?php if ( has_post_thumbnail() ) : ?>
							<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="__img" loading="lazy">
						<?php else : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/common/img/common/pic_dummy.png" alt="no image" class="__img" loading="lazy">
						<?php endif; ?>
					</div>
				</div>
				<div class="c-index-news-slider__item--ttl"><?php the_title(); ?></div>
			</a>
			<?php endwhile; ?>
        	<?php wp_reset_postdata(); ?>
        	<?php endif; ?>
		</div>
		<a class="c_btn is-fade" href="<?php echo home_url(); ?>/news/">お知らせ一覧へ</a>
	</div>

	<div class="c-index-company">
		<div class="c-index-company__img is-fade">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_company.png" alt="橋梁工事" class="__img">
		</div>
		<section class="c-index-company__info">
			<h2 class="c_ttl">
				<span class="__en">
					<span class="__up">C</span>
					<span class="__up">O</span>
					<span class="__up">M</span>
					<span class="__up">P</span>
					<span class="__up">A</span>
					<span class="__up">N</span>
					<span class="__up">Y</span>
				</span>
				<span class="__ja">
					<span class="__up">会</span>
					<span class="__up">社</span>
					<span class="__up">情</span>
					<span class="__up">報</span>
				</span>
			</h2>
			<div class="c-index-company__info--catch is-fade">地域社会に貢献し<br>信頼される<br class="u-md-max">企業であり続ける</div>
			<div class="c-index-company__info--txt is-fade">創業以来、足場工事を中心に橋梁耐震補強工事、発電所や工場等の新設工事、機械据付工事、解体工事などを手掛け、安全第一に専門技術の高い職人から若手社員までが一致団結し、今後も安心し信頼される会社を目指します。</div>
			<a class="c_btn" href="<?php echo home_url(); ?>/company/">詳細を見る</a>
		</section>
	</div>

	<div class="c-index-slide is-fade">
		<div class="c-index-slide__item small">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_slide01.png" alt="工事風景" class="__img">
		</div>
		<div class="c-index-slide__item">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_slide02.png" alt="工事風景" class="__img">
		</div>
		<div class="c-index-slide__item small">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_slide03.png" alt="工事風景" class="__img">
		</div>
		<div class="c-index-slide__item">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_slide04.png" alt="工事風景" class="__img">
		</div>
		<div class="c-index-slide__item small">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_slide01.png" alt="工事風景" class="__img">
		</div>
		<div class="c-index-slide__item">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_slide02.png" alt="工事風景" class="__img">
		</div>
		<div class="c-index-slide__item small">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_slide03.png" alt="工事風景" class="__img">
		</div>
		<div class="c-index-slide__item">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_slide04.png" alt="工事風景" class="__img">
		</div>
	</div>

	<div class="c-index-works">
		<div class="c-index-works__inner">
			<section class="c-index-works-info">
				<h2 class="c_ttl">
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
				</h2>
				<a class="c_btn u-sm-min is-fade" href="<?php echo home_url(); ?>/works/">実績一覧へ</a>
			</section>
			<?php
      			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
      			$args = array(
        			'post_type' => 'works',
        			'posts_per_page' => 6,
        			'orderby' => 'date',
        			'paged' => $paged,
      			);
      			$the_query = new WP_Query($args);
    		?>
			<?php if($the_query->have_posts()) : ?>
			<div class="c-index-works-list">
				<?php
        			while($the_query->have_posts()) : $the_query->the_post();
      			?>
				<a class="c-index-works-list__item is-fade" href="<?php the_permalink(); ?>">
					<div class="c-index-works-list__item--img">
						<?php if (has_post_thumbnail()) : ?>	
							<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="__img" loading="lazy">
					  	<?php else: ?>
						  	<img src="<?php echo get_template_directory_uri(); ?>/common/img/common/pic_dummy.png" alt="no image" class="__img" loading="lazy">
					  	<?php endif; ?>
					</div>
					<div class="c-index-works-list__item--info">
						<span class="__time"><time datetime="<?php the_time('Y-m');?>"><?php the_time('Y.m');?></time></span>
						<span class="__category">
							<?php
							$terms = get_the_terms(get_the_ID(), 'works_category');
							if ($terms && !is_wp_error($terms)) {
								$term_names = wp_list_pluck($terms, 'name');
								echo implode(', ', $term_names);
							}
							?>
						</span>
					</div>
					<div class="c-index-works-list__item--ttl"><?php the_title(); ?></div>
				</a>
				<?php endwhile; ?>
			</div>
			<a class="c_btn c_btn_bottom u-sm-max is-fade" href="<?php echo home_url(); ?>/works/">実績一覧へ</a>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
				<p class="__comming">現在準備中です</p>
    		<?php endif; ?>
		</div>
	</div>

	<div class="c-index-service">
		<div class="c-index-service__catch is-fade">安全第一に専門技術の<br class="u-sm-max">高い職人から若手社員までが<br>一致団結し今後も安心し<br class="u-sm-max">信頼される会社を目指します。</div>
		<section class="c-index-service__inner">
			<h2 class="c_ttl">
				<span class="__en">
					<span class="__up">S</span>
					<span class="__up">E</span>
					<span class="__up">R</span>
					<span class="__up">V</span>
					<span class="__up">I</span>
					<span class="__up">C</span>
					<span class="__up">E</span>
				</span>
				<span class="__ja">
					<span class="__up">事</span>
					<span class="__up">業</span>
					<span class="__up">内</span>
					<span class="__up">容</span>
				</span>
			</h2>
			<div class="c-index-service__detail is-fade">
				<div class="c-index-service__detail--img">
					<div class="c-index-service__detail--img-list is-active" data-index="1">
						<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_service01.png" alt="足場工事" class="__img">
					</div>
					<div class="c-index-service__detail--img-list" data-index="2">
						<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_service02.png" alt="橋梁工事" class="__img">
					</div>
					<div class="c-index-service__detail--img-list" data-index="3">
						<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_service03.png" alt="プラント工事" class="__img">
					</div>
					<div class="c-index-service__detail--img-list" data-index="4">
						<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_service04.png" alt="鍛冶工事" class="__img">
					</div>
					<div class="c-index-service__detail--img-list" data-index="5">
						<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_service05.png" alt="鋼構造物工事" class="__img">
					</div>
					<div class="c-index-service__detail--img-list" data-index="6">
						<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_service06.png" alt="機械器具設置工事" class="__img">
					</div>
					<div class="c-index-service__detail--img-list" data-index="7">
						<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_service07.png" alt="解体工事" class="__img">
					</div>
				</div>
				<div class="c-index-service__detail--list">
					<div class="c-index-service__detail--list-inner">
						<a class="__link __hover-link" href="<?php echo home_url(); ?>/service/#service01"><span class="__sub">足場工事</span></a>
						<a class="__link __hover-link" href="<?php echo home_url(); ?>/service/#service02"><span class="__sub">橋梁工事</span></a>
						<a class="__link __hover-link" href="<?php echo home_url(); ?>/service/#service03"><span class="__sub">プラント<br class="u-sm-max">工事</span></a>
						<a class="__link __hover-link" href="<?php echo home_url(); ?>/service/#service04"><span class="__sub">鍛冶工事</span></a>
					</div>
					<div class="c-index-service__detail--list-inner">
						<a class="__link __hover-link" href="<?php echo home_url(); ?>/service/#service05"><span class="__sub">鋼構造物<br class="u-sm-max">工事</span></a>
						<a class="__link __hover-link" href="<?php echo home_url(); ?>/service/#service06"><span class="__sub">機械器具<br class="u-sm-max">設置工事</span></a>
						<a class="__link __hover-link" href="<?php echo home_url(); ?>/service/#service07"><span class="__sub">解体工事</span></a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="c-index-recruit u-sm-min is-fade">
		<div class="c-index-recruit__top">
			<div class="c-index-recruit__top--img01"></div>
			<div class="c-index-recruit__top--catch"></div>
			<div class="c-index-recruit__top--img02"></div>
		</div>
		<div class="c-index-recruit__bottom">
			<div class="c-index-recruit__bottom--img03"></div>
			<div class="c-index-recruit__bottom--img04"></div>
			<section class="c-index-recruit__bottom--info">
				<h2 class="c_ttl">
					<span class="__en">
						<span class="__up">R</span>
						<span class="__up">E</span>
						<span class="__up">C</span>
						<span class="__up">R</span>
						<span class="__up">U</span>
						<span class="__up">I</span>
						<span class="__up">T</span>
					</span>
					<span class="__ja">
						<span class="__up">採</span>
						<span class="__up">用</span>
						<span class="__up">情</span>
						<span class="__up">報</span>
					</span>
				</h2>
				<a class="c_btn" href="<?php echo home_url(); ?>/recruit/">詳細を見る</a>
			</section>
			<div class="c-index-recruit__bottom--img05"></div>
		</div>
	</div>

	<div class="c-index-recruit-sp u-sm-max is-fade">
		<div class="c-index-recruit-sp__inner">
			<img src="<?php echo get_template_directory_uri(); ?>/common/img/top/pic_recruit_sp.png" alt="採用情報" class="__img">
		</div>
		<section class="c-index-recruit-sp__info">
			<h2 class="c_ttl">
				<span class="__en">
					<span class="__up">R</span>
					<span class="__up">E</span>
					<span class="__up">C</span>
					<span class="__up">R</span>
					<span class="__up">U</span>
					<span class="__up">I</span>
					<span class="__up">T</span>
				</span>
				<span class="__ja">
					<span class="__up">採</span>
					<span class="__up">用</span>
					<span class="__up">情</span>
					<span class="__up">報</span>
				</span>
			</h2>
			<a class="c_btn" href="<?php echo home_url(); ?>/recruit/">詳細を見る</a>
		</section>
	</div>

<?php get_footer(); ?>