<?php
include("includes/config.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link href="<?php app_url(); ?>/includes/styles.css" rel="stylesheet" type="text/css" />
	<?php include("includes/content_head.php");?>
</head>
<body>
	<div class="content">
		<?php page_top_image($CURRENT_PAGE); ?>
		<h1>
			<?php app_name(); ?>
		</h1>
		<?php include("includes/navigation.php");?>

		<div class="article">
			<h2>Services page</h2>
			<br />
			<p>What do you need?</p>
			<table>
				<tr>
					<th>Event</th>
					<th>&nbsp;</th>
					<th>Suggestion</th>
				</tr>
				<tr>
					<td>Product launch</td>
					<td>&nbsp;</td>
					<td>Dress suit</td>
				</tr>
				<tr>
					<td>Party</td>
					<td>&nbsp;</td>
					<td>Evening wear</td>
				</tr>
				<tr>
					<td>Special occasion</td>
					<td>&nbsp;</td>
					<td>Fancy dress</td>
				</tr>
			</table>
		</div>
		<?php page_bottom_image(); ?>
		<br />
		<?php include("includes/content_footer.php");?>
	</div>
</body>
</html>