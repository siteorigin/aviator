<?php
/**
 * Aviator Comment Customizations
 *
 * @package aviator
 */

if( !function_exists('aviator_single_comment') ) :
function aviator_single_comment( $comment, $args, $depth ){
	?>
	<article id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
		<div class="comment-avatar">
		</div>
		<div class="comment-text entry-content">
			<?php echo comment_text() ?>
		</div>
	</article>
	<?php
}
endif;

if( !function_exists('aviator_filter_comment_fields') ) :
/**
 * Filter the comment fields to get more custom HTML.
 * @param $fields
 */
function aviator_filter_comment_fields($fields){
	$commenter = wp_get_current_commenter();

	$req      = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html_req = ( $req ? " required='required'" : '' );
	$html5    = true;

	$fields['author'] = '<div class="comment-form-author comment-form-third"><input id="author" name="author" placeholder="' . esc_attr__('Name', 'aviator') . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' /></div>';
	$fields['email'] = '<div class="comment-form-email comment-form-third"><input id="email" name="email" placeholder="' . esc_attr__('Email', 'aviator') . '" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div>';
	$fields['url'] = '<div class="comment-form-url comment-form-third"><input id="url" name="url" placeholder="' . esc_attr__('Website', 'aviator') . '" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>';

	return $fields;
}
endif;
add_filter('comment_form_default_fields', 'aviator_filter_comment_fields');