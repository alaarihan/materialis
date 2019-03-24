<?php materialis_get_header(); ?>

    <div <?php echo materialis_page_content_atts("content blog-page"); ?>>
    <div class="gridContainer <?php materialis_page_content_wrapper_class(); ?>">
        <div class="row">
            <div class="col-xs-12 <?php echo materialis_posts_wrapper_class(); ?>">
            	
            	<?php 
            		$term = get_queried_object();
            		$terms_children = get_terms(
            			array(
							'taxonomy' => 'dandara_books_cat',
							'parent' => $term->term_id,
							'hide_empty' => false,
						)
            		);
            	?>
            	<div class="books-cat mdc-card">
            	<div class="col-padding">
            	<h3> <?php echo $term->name; ?> </h3>
            	<?php
            		if(count($terms_children) > 0):
            	 ?>
            	 <div class="children-terms-list">
            	 	<h4> الأقسام الفرعية </h4>
            	 	<div class="child-terms row">
		        	 	<?php foreach($terms_children as $term): ?>
		        	 	<div class="col-md-3 pull-right">
						  <a href="<?php echo get_term_link($term); ?>" class="child-term">
							<i class="fas fa-book"></i>
							<span class="name"><?php echo $term->name .' (' . $term->count .')'; ?></span>
						  </a>
						</div>
		        	 	<?php endforeach; ?>
            	 </div>
            	 </div>
            	 <?php 
            	 endif; 
                 if (have_posts()):
            	 ?>
                <div class="books-list row">
                    <?php 
                    while (have_posts()):
                        the_post();
                        get_template_part('template-parts/content', 'book');
                    endwhile;
                    ?>
                </div>
                <?php else: ?>
                    <div class="no-results">لا يوجد أي كتب في هذا القسم بعد!</div>
                <?php endif; ?>
                
                <div class="navigation-c">
                    <?php
                    if (have_posts()):
                        materialis_print_pagination(array(
                            'prev_text'          =>'<i class="mdi mdi-arrow-left"></i>',
                            'next_text'          =>'<i class="mdi mdi-arrow-right"></i>',
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'materialis') . ' </span>',
                        ));
                    endif;
                    ?>
                </div>
                </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer();

