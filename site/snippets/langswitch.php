<nav class="languages">
  <ul>
    <?php foreach($kirby->languages()->flip() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
        <?php $lang = html($language->name());
        echo t($lang, $lang) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>