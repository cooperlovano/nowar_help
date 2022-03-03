<?php
// if the form input is not valid, show a list of alerts
if ($alert) : ?>
<div class="alert">
    <ul>
        <?php foreach ($alert as $message): ?>
        <li><?= kirbytext($message) ?></li>
        <?php endforeach ?>
    </ul>
</div>
<?php endif ?>

<div id="add-ressource"> 
    <h2><?= t('addressource') ?></h2>
    <form class="nw_link-box" action="<?= $page->url() ?>" method="POST">
        <div class="form-element">
            <label for="title"><?php echo t('addressource_title') ?> <abbr title="required">*</abbr></label>
            <input type="text" id="title" name="title" value="<?= $data['title'] ?? null ?>" required/>
        </div>

        <div class="row">
            <div class="form-element col-6">
                <label for="country"><?php echo t('addressource_country') ?> <abbr title="required">*</abbr></label>
                <input type="text" id="country" name="country" value="<?= $data['country'] ?? null ?>"/>
            </div>

            <div class="form-element col-6">
                <label for="topic"><?php echo t('addressource_topic') ?></label>
                <input type="text" id="topic" name="topic" value="<?= $page->title() ?>"/>
            </div>
        </div>



        <div class="form-element">
            <label for="company"><?php echo t('addressource_description') ?></label>
            <input type="text" id="description" name="description" value="<?= $data['description'] ?? null ?>"/>
        </div>

        <div class="form-element">
            <label for="adress"><?php echo t('addressource_url') ?> <abbr title="required">*</abbr></label>
            <input type="text" id="adress" name="adress" value="<?= $data['adress'] ?? null ?>"/>
        </div>

        <div class="honey">
            <label for="message"><?php echo t('addressource_honey') ?></label>
            <input type="website" name="website" id="website" value="<?= isset($data['website']) ? esc($data['website']) : null ?>"/>
        </div>

        <div class="nw_right-container">
            <input class="registration-button" type="submit" name="add" value="<?php echo t('addressource_add') ?>" />
        </div>
    </div>
</div>
