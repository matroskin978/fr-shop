<li <?php if (isset($item['children'])) echo 'class="has-children"' ?>>
    <a class="menu-link <?php if (isset($item['children'])) echo 'has-children' ?>" href="<?= $item['slug'] ?>"><?= $item['title'] ?></a>
    <?php if (isset($item['children'])): ?>
        <ul class="sub-menu-list animate slideIn">
            <?= $this->getMenuHtml($item['children']);?>
        </ul>
    <?php endif; ?>
</li>
