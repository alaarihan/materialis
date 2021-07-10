<?php 
$file = get_field('book_file');
?>

<div id="post-<?php the_ID();?>" class="col-md-3 pull-right">
  <div class="book-item">
    <i class="fas fa-book"></i>
    <div class="name"><?php the_title(); ?></div>
    <div class="book-links">
      <a class="browse" href="<?php the_permalink(); ?>">تصفح</a>
      <a class="download" target="_blank" href="<?php echo $file['url']; ?>">تحميل</a>
    </div>
  </div>
</div>
