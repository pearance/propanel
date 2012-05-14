<?php
/**
 * Preprocessor for theme('page').
 */
function propanel_preprocess_page(&$vars) {
  // Process local tasks. Only do this processing if the current theme is
  // indeed Rubik. Subthemes must reimplement this call.
  global $theme;
  if ($theme === 'propanel') {
    _rubik_local_tasks($vars);
  }
}
