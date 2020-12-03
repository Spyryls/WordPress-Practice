<?php
get_header(); 
?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>);"></div>
<div class="page-banner__content container container--narrow">
  <h1 class="page-banner__title">Welcome to the School Billboard</h1>
  <div class="page-banner__intro">
    <p>Read what what others have to say!</p>
  </div>
</div>  
</div>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post();?>

      <div class="post-item">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
          <div class="metabox">
            <p>Posted By: NAME on DATE in CATAGORY</p>
          </div>

          <div class="generic-content">
            <?php the_excerpt();?>
            <p><a href=<?php the_permalink(); ?>>Continue Reading &raquo;</a></p>
          </div>
      </div>

<?php } ?>
</div>

<?php 
get_footer();
?>