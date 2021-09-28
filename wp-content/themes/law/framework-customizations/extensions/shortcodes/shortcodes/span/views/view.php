<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php if(!empty($atts['span_wrapper'])): ?>
    <div <?php if(!empty($atts['span_wrapper_class'])) echo "class='{$atts['span_wrapper_class']}'"; ?>>
<?php endif; ?>
<span
    id="<?php if(!empty($atts['span_id'])) echo $atts['span_id']; ?>"
    class="<?php if(!empty($atts['span_class'])) echo $atts['span_class']; ?>"
    <?php if(!empty($atts['span_data_attrs'])) echo $atts['span_data_attrs']; ?>
>
    <?php if(!empty($atts['span_icon'])): ?>
        <i class="<?php echo $atts['span_icon']; ?>"></i>
    <?php endif; ?>
    <?php if(!empty($atts['span_content'])): ?>
        <?php echo $atts['span_content']; ?>
    <?php endif; ?>
</span>
<?php if(!empty($atts['span_wrapper'])): ?>
    </div>
<?php endif; ?>