<?php materialis_get_header(); ?>

    <div <?php echo materialis_page_content_atts("content blog-page"); ?>>
    <div class="gridContainer <?php materialis_page_content_wrapper_class(); ?>">
        <div class="row">
            <div class="col-xs-12 <?php echo materialis_posts_wrapper_class(); ?>">
            	
            	<?php 
            		$terms_children = get_terms(
            			array(
							'taxonomy' => 'dandara_books_cat',
							'parent' => 0,
							'hide_empty' => false,
						)
            		);
            	?>
            	<div class="books-cat mdc-card">
            	<div class="col-padding">
            	<h3> المكتبة النبوية </h3>
            	<?php
            		if($terms_children && count($terms_children) > 0):
            	 ?>
            	 <div class="book-terms-list">
            	 <div class="book-terms row">
            	 	<?php foreach($terms_children as $term): ?>
            	 	<div class="col-md-3 pull-right">
					  <a href="<?php echo get_term_link($term); ?>" class="book-term">
					    <i class="fas fa-book"></i>
						<div class="name"><?php echo $term->name; ?></div>
					  </a>
					</div>
            	 	<?php endforeach; ?>
            	 </div>
            	 </div>
            	 <?php 
            	 endif; 
                 ?>
                </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer();

