<div class=" custom-slideshow-wrapper views-field-<?php print drupal_clean_css_identifier($view->field[$field]->field); ?>">
  <?php if ($view->field[$field]->label()) { ?>
    <label class="custom-slideshow-field view-label-<?php print drupal_clean_css_identifier($view->field[$field]->field); ?>">
      <?php print $view->field[$field]->label(); ?>:
    </label>
  <?php } ?>
  <div class="custom-slideshow-content views-content-<?php print drupal_clean_css_identifier($view->field[$field]->field); ?>">
    <?php print $view->style_plugin->rendered_fields[$count][$field]; ?>
  </div>
</div>
