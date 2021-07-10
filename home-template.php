<?php
/**
 * Template Name: Home Page
 *
 * @package Dandara
 *
 */
 
?>
<?php materialis_get_header();?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
	<div id="splash" class="hidden">
		<div class="menu">
			<a href="" class="icon home desktop"></a>
			<a href="mobile-home" class="icon home mobile"></a>
			<a href="culture" class="icon culture"></a>
			<a href="development" class="icon development"></a>
			<a href="dandara" class="icon amra"></a>
		</div>
	</div>

	<div id="main-content">
		<div class="container">
			<div class="nav pull-left">
				<a href="#" class="btn lang btn-default back hidden">العودة</a>
				<a href="https://community.dandara.org" target="_blank" class="btn lang">مجتمعات النقاش</a>
				<a href="https://chat.dandara.org" target="_blank" class="btn lang">المحادثة المباشرة</a>
				<a href="#" class="social fb"></a>
				<a href="#" class="social tw"></a>
				<a href="#" class="social wp"></a>
			</div>
		</div>
		<div class="circle">
			<div class="danlogo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/home-assets/img/micon_danlogo.png" alt="" class="img-responsive"></div>

			<button class="icon about" value="rotateOut"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/home-assets/img/micon_about.png" alt="" class="img-responsive"></button>
			<a href="/أسئلة-عامة/" class="icon general-questions">
				<i class="fas fa-question-circle"></i>
				<div>أسئلة عامة</div>
			</a>

			<button class="icon thoughts"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/home-assets/img/micon_thoughts.png" alt="" class="img-responsive"></button>
			
			<button class="icon conf" style="display: none;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/home-assets/img/micon_conf.png" alt="" class="img-responsive"></button>

			<button class="icon conf">
				<i class="fas fa-users"></i>
				<div>الأنشطة</div>
			</button>


			<button class="icon gal"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/home-assets/img/micon_gal.png" alt="" class="img-responsive"></button>
			<button class="icon lib">
			<i class="fas fa-calendar-alt"></i>
			<div>مؤتمراتنا</div>
			</button>
			<button class="icon contact"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/home-assets/img/micon_contact.png" alt="" class="img-responsive"></button>
			<button class="icon reg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/home-assets/img/micon_reg.png" alt="" class="img-responsive"></button>
			<button class="icon library">
			<i class="fas fa-book"></i>
			<div>المكتبة النبوية</div
			</button>
		</div>
		<div id="content">
		
			<div class="about hidden">
				<div class="container">
					<button class="btn btn-danger closex pull-left">X</button>
					<div class="content">
						<h2>من نحن</h2>
						<?php echo do_shortcode( '[insert page="2" display="content"]' ); ?>
					</div>
				</div>
			</div>

<!-- new sections start -->
<div class="conf hidden">
				<div class="container">
					<button class="btn btn-danger closex pull-left">X</button>
					<div class="content">
						<h2>الانشطة</h2>
						<?php echo do_shortcode( '[insert page="453" display="content"]' ); ?>
					</div>
				</div>
			</div>


			<div class="lib hidden">
				<div class="container">
					<button class="btn btn-danger closex pull-left">X</button>
					<div class="content">
						

						<h2>مؤتمراتنا</h2>
						<?php echo do_shortcode( '[insert page="269" display="content"]' ); ?>
					</div>
				</div>
			</div>

<!-- end new sections -->






			<div class="thoughts hidden">
				<div class="container">
					<button class="btn btn-danger closex pull-left">X</button>
					<div class="content">
						<h2>الفكر الدندراوي</h2>
						<?php echo do_shortcode( '[insert page="571" display="content"]' ); ?>
					</div>
				</div>
			</div>

			<div class="login hidden">
				<div class="container">
					<button class="btn btn-danger closex pull-left">X</button>
					<div class="content">
						<h2>التسجيل</h2>
						

						<?php echo do_shortcode( '[insert page="424" display="content"]' ); ?>
			

					</div>
				</div>
			</div>

			<div class="contact hidden">
				<div class="container">
					<button class="btn btn-danger closex pull-left">X</button>
					<div class="content">
						<h2>تواصل معنا</h2>
						<?php echo do_shortcode( '[insert page="423" display="content"]' ); ?>
					</div>
				</div>
			</div>

			<div class="gal hidden">
				<div class="container">
					<button class="btn btn-danger closex pull-left">X</button>
					<div class="content">
						<h2>منصة القضايا المحمدية</h2>
						<div class="row">
							<?php
							$gargs = array(
								'post_type'              => array( 'post' ),
								'cat'              => 3,
								'posts_per_page'	=> 6,
								);
							$query = new WP_Query( $gargs );

							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									$post_id = get_the_ID();
									?>
									<div class="col-md-4 pull-right">
										<a href="<?php the_permalink(); ?>">
											<div class="img">
												<?php the_post_thumbnail( 'single-post-thumbnail', array('class' => 'img-responsive') ); ?>
											</div>
											<div class="posttitle text-right"><?php the_title(); ?></div>
										</a>
									</div>
									<?php
								}
							} else {
							}
							wp_reset_postdata();
							?>
						</div>
						<div class="clearfix" style="height:20px;"></div>
						<a href="<?php echo esc_url(home_url( '/' )); ?>/?page_id=83" class="btn btn-success btn-block"><strong>المزيد</strong></a>
					</div>
				</div>
			</div>

			<div class="library hidden">
				<div class="container">
					<button class="btn btn-danger closex pull-left">X</button>
					<div class="content">
						<h2>المكتبة النبوية</h2>
						<div class="library-categories">
						<?php 
						$library_terms = get_terms( array(
							'taxonomy' => 'dandara_books_cat',
							'hide_empty' => false,
							'parent'   => 0
						) );
						if(count($library_terms) > 0):
								
						?>
						<div class="row">
							<?php foreach($library_terms as $term): ?>
							<div class="col-md-3 pull-right">
							  <a href="<?php echo get_term_link($term); ?>" class="lib-cat">
							    <i class="fas fa-book"></i>
								<div class="name"><?php echo $term->name; ?></div>
							  </a>
							</div>
							<?php endforeach; ?>
						</div>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>