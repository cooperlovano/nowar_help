<?php
$linklists = $page->children();
$language = $kirby->language();
?>

<!-- Todo: CSS verbessern und auslagern, Prüfen ob Seiten überhaupt existiert, Links setzen -->
<ul>
    <?php foreach ($linklists as $list): ?>
    <li><a href="#<?= $list->slug() ?>"><?= $list->title()->html() ?></a></li>
    <?php endforeach ?>
</ul>

<?php foreach ($linklists as $list): 
    
?>
<div id="<?= $list->slug() ?>">
<h2><?= $list->title()->html() ?></h2>


<?= $list->text()->toBlocks() ?>
    <?php 
    $link_entries = $list->links()->toStructure();
    foreach ($link_entries as $link_entry):
        $title = $link_entry->title_en();
        if ($language == 'ua' and $link_entry->title_ua() != "") {
            $title = $link_entry->title_ua();
        }
        elseif ($language == 'ru' and $link_entry->title_ru() != "") {
            $title = $link_entry->title_ru();
        }

        $description = $link_entry->description_en();
        if ($language == 'ua' and $link_entry->description_ua() != "") {
            $description = $link_entry->description_ua();
        }
        elseif ($language == 'ru' and $link_entry->description_ru() != "") {
            $description = $link_entry->description_ru();
        }

        ?>
        <div class="nw_link-box">
            <?php if ($title->exist()): ?><h3><?= $title->html() ?></h3><?php endif ?>
            <?php if ($description->exist()): ?><p><?= $description->html() ?></p><?php endif ?>
            
            <?php 
            $links = $link_entry->link()->toStructure();
            foreach ($links as $singleLink): 
            if (! is_null($singleLink) ):
            $langBoxes = $singleLink->lang()->split();
            if ($singleLink->lang_other()->exists()) { $langBoxes[] = $singleLink->lang_other(); };

?>
            <span class="nw_link-lang-code"><?= implode("/", $langBoxes) ?></span>
            <a href="<?= $singleLink->link() ?>" target="_blank"><?= $singleLink->link() ?></a><br>
            
            <?php endif;
            endforeach;?>

        </div>
    <?php endforeach; ?>
</div>
<?php endforeach ?>

