
<div class="container">
  <!-- Start of canvas -->
  <div id="canvas" class="span-20">

    <!-- Header starts -->
    <div id="header" class="span-20 last">
      <h1 id="logo" <?php if ($hide_site_name) print 'class="invisible-sitename"'; ?> >
        <a title="<?php print $site_name; ?><?php if ($site_slogan != '') print ' &ndash; '. $site_slogan; ?>" href="<?php print url(); ?>">

          <?php print $site_name; ?>

          <?php if ( ! $hide_site_slogan AND $site_slogan != '') print ' &ndash; '. $site_slogan; ?>
        </a>
      </h1>

      <?php render($page['header']); ?>

      <?php if (isset($main_menu)) : ?>
        <?php print theme('links__system_main_menu', array(
            'links'      => $main_menu,
            'attributes' => array('id' => 'main-menu', 'class' => array('links',)),
        )); ?>
      <?php endif; ?>

      <?php if (isset($secondary_menu)) : ?>
        <?php print theme('links__system_secondary_menu', array(
            'links'      => $secondary_menu,
            'attributes' => array('id' => 'secondary-menu', 'class' => array('links',),)
        )); ?>
      <?php endif; ?>    
    </div>
    <!-- Header ends -->

    <!-- Left column starts -->
    <div id="left_column" class="<?php if ($page['sidebar_first']) { print $left_classes; } ?> prepend-2 span-5 append-1">
      <?php if($page['sidebar_first']) : ?>
        <?php print render($page['sidebar_first']); ?>
      <?php endif; ?>
    </div>
    <!-- Left column ends -->

    <!-- Main content area starts -->
    <div class="<?php print $center_classes; ?> span-11 append-1 last">
      <?php
        if ($breadcrumb != '') {
          print $breadcrumb;
        }

        if (count($tabs)) {
          print '<div class="tabs">'. render($tabs) .'</div>';
        }

        if ($messages != '') {
          print '<div id="messages">'. $messages .'</div>';
        }
      
        if ($title != '') {
          print '<h2>'. $title .'</h2>';
        }      

        print render($page['help']); // Drupal already wraps this one in a class      

        print render($page['content']);
        print $feed_icons;
      ?>
    </div>
    <!-- Main content area ends -->

    <!-- Footer starts -->
  <?php if ($page['footer']) : ?>
    <div id="footer" class="prepend-2 span-17 append-1 last">
      <?php if ($page['footer']): ?>
        <?php print render($page['footer']); ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>
    <!-- Footer ends -->
  </div>
  <!-- End of canvas -->

  <div id="right-column" class="span-4 last"></div>

</div>

