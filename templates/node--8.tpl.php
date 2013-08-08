<!-- About the Program -->
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <span class="submitted">
        <?php print $user_picture; ?>
        <?php print $submitted; ?>
      </span>
    <?php endif; ?>
  </header>

  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
  ?>
    <div id="TopHeader"></div>
    <div id="AboutHeader"><img src="sites/default/themes/cftc/images/about.png" alt="About Fellowship" ></div>
    <div class="row-fluid">
    <div class="span6"><div id="col1">
    <?php print render($content['field_column_1']); ?>
    </div></div>
    <div class="span6"><div id="col2">
    <?php print render($content['field_column_2']); ?>
    </div></div>
    </div>
    <?php print render($content); ?>


  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
