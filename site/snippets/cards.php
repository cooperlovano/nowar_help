<?php
$images = $page->images();
?>

<!-- Todo: CSS verbessern und auslagern, Prüfen ob Seiten überhaupt existiert, Links setzen -->


<div class="row" >
    <?php foreach ($images as $image):
    $link = $image->link()->toPage()
    ?>
    <figure class="nw_card col-6 row">
        <div class="nw_card-img col-12 col-md-6">
            <?=($link) ? "<a href='" . $link->url() .  "'>": "" ?><img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>"><?=($link) ? "</a>" : "" ?> 
        </div>
        <div class="nw_card-info col-12 col-md-6">
            <div>
                <?=($link) ? "<a href='" . $link->url() .  "'>": "" ?><h4><?= $link->title() ?></h4><p><?= $image->description() ?></p><?=($link) ? "</a>" : "" ?> 
            </div>
        </div>
    </figure>
    <?php endforeach ?>
</div>
