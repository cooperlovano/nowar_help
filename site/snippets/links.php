<?php
$linklists = $page->children();
$language = $kirby->language();
?>

<!-- Todo: CSS verbessern und auslagern, Prüfen ob Seiten überhaupt existiert, Links setzen -->
<?php foreach ($linklists as $list): ?>
<a class="nw_link-button dark" href="#<?= $list->slug() ?>"><?= $list->title()->html() ?></a>
<?php endforeach ?>

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
            $links = $link_entry->links()->toStructure();
            foreach ($links as $singleLink): 
            if ($singleLink->link() != ""):
            $langBoxes = [];
            $langBoxes = $singleLink->lang()->split();
            if ($singleLink->lang_other() != "") { $langBoxes[] = $singleLink->lang_other(); };
    
?>          <a href="<?= $singleLink->link() ?>" target="_blank">
                <div class="nw_link-link-containter">
                    <span class="nw_link-lang-code"><?= implode(" ", $langBoxes) ?></span>
                    <span class="nw_link-text"><?= $singleLink->link() ?></span>
                </div>
            </a>
            <?php endif; 
            endforeach;
            if ($link_entry->tags() != ""):
            ?>
            <div class="nw_right-container">
                <span><?php echo t('tags') ?>:</span>
                <?php foreach ($link_entry->tags()->split() as $tag): ?>
                <span class="nw_link-tag" ><?php echo t($tag, $tag) ?></span>
            </div>
            <?php endforeach; endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<?php snippet('ressourcebutton') ?>
<?php endforeach ?>
<?php snippet('addressource') ?>

