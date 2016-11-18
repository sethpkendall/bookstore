<?php // $Id$ ?>

<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"
         <?php print $attributes; ?> >

<?php if ($block->subject) : ?>
  <h4 class="block-title"><?php print $block->subject ?></h4>
<?php endif;?>

  <div class="content"><?php print $content ?></div>
</div>

