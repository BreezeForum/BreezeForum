<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('bootstrap.min', 'lithified')); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="lithified">
	<div class="container-narrow">

		<div class="masthead">
			<ul class="nav nav-pills pull-right">
				<li>
					<a href="http://lithify.me/docs/manual/quickstart">Quickstart</a>
				</li>
				<li>
					<a href="http://lithify.me/docs/manual">Manual</a>
				</li>
				<li>
					<a href="http://lithify.me/docs/lithium">API</a>
				</li>
				<li>
					<a href="http://lithify.me/">More</a>
				</li>
			</ul>
			<a href="http://lithify.me/"><h3>&#10177;</h3></a>
		</div>

		<hr>

		<div class="content">
			<?php echo $this->content(); ?>
		</div>

		<hr>

		<div class="footer">
			<p>&copy; Union Of RAD 2013</p>
		</div>

	</div>
</body>
</html>