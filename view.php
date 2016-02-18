<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php  if (!empty($field_1_textbox_text)): ?>
	<h2><?php  echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET); ?></h2>
<?php  endif; ?>


<?php  if (!empty($field_2_textarea_text)) {
			echo nl2br(htmlentities($field_2_textarea_text, ENT_QUOTES, APP_CHARSET)); 
}
else {
	echo ('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.');
}
 ?>
