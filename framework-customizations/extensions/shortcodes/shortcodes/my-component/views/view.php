<?php 
if (!defined('FW')) {
    die('Forbidden. Unyson isnt setuped');
}

if (empty($atts['option_my'])) {
  return;
}
?>

<?php echo $atts['option_my'] ?>


