<?php if ( is_active_sidebar( 'first_box_widgets' ) || is_active_sidebar( 'second_box_widgets' ) || is_active_sidebar( 'third_box_widgets' ) || is_active_sidebar( 'fourth_box_widgets' ) ) : ?>
<div class="footer-widgets sidebar">
    <div>
        <div class="gridContainer">
	        <div class="row footer-content-row">
	            <div class="footer-content-col col-md-3 col-xs-12">
	                    <?php dynamic_sidebar( 'first_box_widgets' ); ?>
	            </div>
				<div class="footer-content-col col-md-3 col-xs-12">
	                    <?php dynamic_sidebar( 'second_box_widgets' ); ?>
	            </div>
				<div class="footer-content-col col-md-3 col-xs-12">
	                    <?php dynamic_sidebar( 'third_box_widgets' ); ?>
	            </div>
				<div class="footer-content-col col-md-3 col-xs-12">
	                    <?php dynamic_sidebar( 'fourth_box_widgets' ); ?>
	            </div>
	        </div>
	    </div>
    </div>
</div>
<?php endif; ?>

<div <?php echo materialis_footer_container('footer-simple') ?>>
    <div <?php echo materialis_footer_background('footer-content center-xs') ?>>
        <div class="gridContainer">
	        <div class="row middle-xs footer-content-row">
	            <div class="footer-content-col col-xs-12">
	                    <?php echo materialis_get_footer_copyright(); ?>
	            </div>
	        </div>
	    </div>
    </div>
</div>
