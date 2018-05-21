<?php function pdf_shortcode() {

	 $args = array(
	'post_type' => 'attachment',
	'numberposts' => null,
	'post_status' => null,
	'post_parent' => $post->ID,
	'pdf' => 'application/pdf'
); 
$attachments = get_posts($args);
if ($attachments) {
	foreach ($attachments as $attachment) {
		echo apply_filters('the_title', $attachment->post_title);
		the_attachment_link($attachment->ID, false);
	}
}
}

add_shortcode('attach_pdf', 'pdf_shortcode');

?>