<?php $highlights = $page->highlights()->toStructure(); ?>
        <?php if ($highlights->isNotEmpty()) : ?>
            <?php foreach ($highlights as $item): ?>
            <div class="highlight">
                <h1 class="entry-title"><?= $item->highlightpage()->toPage()->title() ?></h1>
                <p class="entry-subtitle"><?= $page->sectwosubtitle() ?></p>
                <ul>
                <?php foreach($item->highlightpage()->toPage()->children() as $subpage): ?>
                <li>
                <a href="<?= $subpage->parent()->url() ?>#<?= html($subpage->title()) ?>">
                <?= html($subpage->title()) ?>
                </a>
                </li>
                <?php endforeach ?>
                </ul>
            </div>
            <?php endforeach ?>
            </ul>
        <?php endif ?>
        </div>

