<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

?>
<span class="fw-icon">
    <?php if(isset($atts['custom_link']) && $atts['custom_link']): ?>
        <a href="<?php echo esc_attr($atts['custom_link']); ?>"><i class="<?php echo esc_attr($atts['icon']); ?>"></i></a>
    <?php else: ?>
	    <i class="<?php echo esc_attr($atts['icon']); ?>"></i>
    <?php endif; ?>
	<?php if (!empty($atts['title'])): ?>
		<br/>
		<span class="list-title"><?php echo $atts['title'] ?></span>
	<?php endif; ?>
</span>