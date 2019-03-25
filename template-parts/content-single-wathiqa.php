<div class="post-list-item col-xs-12">
    <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
    
        <div class="post-content-single mdc-card">
    
            <div class="post-content-inner">
                <div class="col-padding">
                    <?php the_content(); ?>
                    <?php materialis_single_item_title($before = "<h4 class='wathiqa-page-number'>", $after = "</h4>"); ?>
                </div>
            </div>
            
        </div>
    
    
    </div>
</div>
