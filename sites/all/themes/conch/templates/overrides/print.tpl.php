<?php

/**
 * @file print.tpl.php
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $print['language']; ?>" xml:lang="<?php print $print['language']; ?>">
  <head>
    <?php print $print['head']; ?>
    <title><?php print $print['title']; ?></title>
    <?php print $print['scripts']; ?>
    <?php print $print['robots_meta']; ?>
    <?php print $print['base_href']; ?>
    <?php print $print['favicon']; ?>
    <?php print $print['css']; ?>
    <?php $node = node_load($print['node']->nid); ?>
    
  </head>
  <body<?php print $print['sendtoprinter']; ?>>
    <?php if (!empty($print['message'])) {
      print '<div class="print-message">'. $print['message'] .'</div><br />';
    } ?>
    <div class="print-logo"><?php print $print['logo']; ?></div>
    <div class="print-site_name"><?php print $print['site_name']; ?></div>
    <br />
    <div class="print-breadcrumb"><?php print $print['breadcrumb']; ?></div>
    <hr class="print-hr" />
    <h2 class="print-title"><?php print $print['title']; ?></h2>
    <div class="print-submitted"><?php print $print['submitted']; ?></div>
    <div class="print-created"><?php print $print['created']; ?></div>
    <div class="print-content"><?php print $node->body; ?></div>
    <div class="print-taxonomy"><?php print $print['taxonomy']; ?></div>
    <div class="print-footer"><?php print $print['footer_message']; ?></div>
    <hr class="print-hr" />
    <div class="print-source_url"><?php print $print['source_url']; ?></div>
    <div class="print-links"><?php print $print['pfp_links']; ?></div>
  </body>
</html>
