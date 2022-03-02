<?php
$items = $pages->listed();
?>

<input class="burger-check" id="burger-check" type="checkbox"><label id="mobile-menu-btn" for="burger-check" class="burger"><span>Menu</span></label>
<nav id="site-nav" class="clearfix">
    <?php snippet('langswitch') ?>
    <ul id="menu-main-menu" class="menu">
        <?php foreach ($items as $item): ?>
        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item current_page_item">
            <a <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->escape() ?></a>
        </li>
        <?php endforeach ?>
    </ul>
    <?php snippet('search') ?>
</nav><!-- end #site-nav -->
