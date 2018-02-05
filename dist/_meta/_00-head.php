<!DOCTYPE html>
<html class="<?php print isset($htmlClass) ? $htmlClass : '' ?>">
	<head>
		<title><?php print isset($title) ? $title : '' ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" href="../../css/style.css?<?= $cacheBuster ?>" media="all" />
		<link rel="stylesheet" href="../../css/pattern-scaffolding.css?<?= $cacheBuster ?>" media="all" />

		<!-- Begin Pattern Lab (Required for Pattern Lab to run properly) -->
		<?= $patternLabHead ?>
		<!-- End Pattern Lab -->

	</head>
	<body class="<?php print isset($bodyClass) ? $bodyClass : '' ?>">
