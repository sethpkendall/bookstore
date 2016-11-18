<?php // $Id$ ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"
    <?php print $attributes; ?>>

<?php if ( ! $page) : ?>
  <h3><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h3>
<?php endif; ?>

<?php if ($display_submitted) : ?>
  <div class="meta">
    <div class="submitted">
      <?php print t('Submitted by !username on !datetime', array(
        '!username' => $name,
        '!datetime' => $date,
        )); ?>
    </div>
  </div>
<?php endif; ?>

  <div class="content clear-block" <?php print $content_attributes; ?>>
    <?php print $user_picture; ?>
    <?php print render($content); ?>
  </div>

</div>

