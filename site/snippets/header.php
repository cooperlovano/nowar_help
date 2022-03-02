<!DOCTYPE html>
<html id="doc" lang="en-GB">
<head>
	<meta charset="UTF-8" />

    <title><?= $page->title() ?></title>

	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel='stylesheet' href='<?= $kirby->url('assets') ?>/bootstrap-grid.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?= $kirby->url('assets') ?>/moka.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?= $kirby->url('assets') ?>/nowar.css' type='text/css' media='all' />

</head>

<body class="page-template-default page page-id-31">
<div id="container">

<div id="sidebar-wrap">
	<div id="sidebar">
	<header id="masthead" class="clearfix" role="banner">
		<div id="site-title">
			<h1><a href="<?= $site->url() ?>" title="nowar.help">nowar.help</a></h1>
			<h2 class="site-description"><?php echo t('subtitle') ?></h2>
			</div><!-- end #site-title -->
	</header><!-- end #masthead -->

    <?php snippet('nav') ?>

	</div><!-- end #sidebar -->
</div><!-- end #sidebar-wrap -->

<div id="main-wrap">