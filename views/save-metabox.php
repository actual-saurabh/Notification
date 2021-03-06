<?php
/**
 * Save notification metabox
 *
 * @package notification
 */

?>
<div class="submitbox" id="submitpost">
	<div class="misc-pub-section">
		<?php do_action( 'notification/admin/metabox/save/pre', $this ); ?>
		<label class="row-label" for="onoffswitch"><strong><?php esc_html_e( 'Enable', 'notification' ); ?></strong></label>
		<div class="onoffswitch">
			<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" value="1" id="onoffswitch" <?php checked( $this->get_var( 'enabled' ), true ); ?>>
			<label class="onoffswitch-label" for="onoffswitch">
				<span class="onoffswitch-inner"></span>
				<span class="onoffswitch-switch"></span>
			</label>
		</div>
		<div class="clear"></div>
		<?php do_action( 'notification/admin/metabox/save/post', $this ); ?>
	</div>

	<div id="major-publishing-actions">
		<div id="delete-action">
			<?php if ( current_user_can( 'delete_post', $this->get_var( 'post_id' ) ) ) : ?>
				<a class="submitdelete deletion" href="<?php echo get_delete_post_link( $this->get_var( 'post_id' ) ); ?>"><?php echo esc_html( $this->get_var( 'delete_link_label' ) ); ?></a>
			<?php endif; ?>
		</div>
		<div id="publishing-action">
			<span class="spinner"></span>
			<input type="submit" value="<?php esc_attr_e( 'Save', 'notification' ); ?>" class="button button-primary button-large" id="publish" name="publish">
		</div>
		<div class="clear"></div>
	</div>
</div>
