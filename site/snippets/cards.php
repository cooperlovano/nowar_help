<?php
$images = $page->images();
?>

<!-- Todo: CSS verbessern und auslagern, Prüfen ob Seiten überhaupt existiert, Links setzen -->

<div>
    <?php foreach ($images as $image): ?>
    <div class="nw_card">
    <?php if ($link = $image->link()->toPage()): ?>
    <a href="<?= $link->url() ?>">
    <?php endif ?>
        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        <div class="nw_card-info">
            <div>
                <h4><?= $link->title() ?></h4>
                <p><?= $image->description() ?></p>
            </div>
        </div>
        <?=($link) ? "</a>" : "" ?> 
    </div>
    <?php endforeach ?>
</div>
