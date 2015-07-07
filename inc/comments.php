<?php
/**
 * Aviator Comment Customizations
 *
 * @package aviator
 */

if( !function_exists('aviator_single_comment') ) :
function aviator_single_comment( $comment, $args, $depth ){
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
			?>
			<li class="post pingback">
			<p><?php _e( 'Pingback:', 'aviator' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'aviator' ), ' ' ); ?></p>
			<?php
			break;
		default :
			?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment">
				<footer>
					<?php echo get_avatar( $comment, 50 ); ?>
					<div class="comment-author">
						<cite class="fn"><?php comment_author_link() ?></cite>
					</div><!-- .comment-author -->


					<div class="comment-meta commentmetadata">
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time datetime="<?php comment_time( 'c' ); ?>"><?php
								/* translators: 1: date, 2: time */
								printf( __( '%1$s at %2$s', 'aviator' ), get_comment_date(), get_comment_time() );
								?></time></a>

							<span class="support">
								<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
								<?php edit_comment_link( __( 'Edit', 'aviator' ), ' ' ); ?>
							</span>
					</div><!-- .comment-meta .commentmetadata -->

					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em class="awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'aviator' ); ?></em>
					<?php endif; ?>
				</footer>

				<div class="comment-content entry-content"><?php comment_text(); ?></div>
			</article><!-- #comment-## -->

			<?php
			break;
	endswitch;
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