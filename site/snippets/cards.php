<?php
$images = $page->images()->sortBy('sort');
?>

<!-- Todo: CSS verbessern und auslagern, Prüfen ob Seiten überhaupt existiert, Links setzen -->


<div class="row" >
    <?php foreach ($images as $image):
    $link = $image->link()->toPage()
    ?>
    <figure class="nw_card col-6 col-md-3"> 
        <?php if($image->link()->toPage()): ?>
        <div class="nw_card-info">
            <?=($link) ? "<a href='" . $link->url() .  "'>": "" ?><img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>"><?=($link) ? "</a>" : "" ?> 
            <?=($link) ? "<a href='" . $link->url() .  "'>": "" ?><h4><?= $link->title() ?></h4><p><?= $image->description() ?></p><?=($link) ? "</a>" : "" ?> 
        </div>
        <?php endif ?>
    </figure>
    <?php endforeach ?>
</div>