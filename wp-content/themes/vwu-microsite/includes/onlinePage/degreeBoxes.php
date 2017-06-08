<div class="degrees">
  <?php foreach ($degrees as $post): ?>
    <?php setup_postdata($post); ?>
      <?php $title = get_the_title(); ?>
      <?php $summary = get_field('summary'); ?>

      <div class="degree">
        <h3 class="degree__title"><?php echo $title; ?></h3>
        <?php echo $summary; ?>
      </div>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
</div>
