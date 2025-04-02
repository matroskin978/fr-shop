<?php if ($item['parent_id'] == 0): ?>
    <div class="col-lg-3">
        <h6 class="title"><?= h($item['title']) ?></h6>
<?php else: ?>
    <li><a href="<?= base_href("/category/{$item['slug']}") ?>"><?= h($item['title']) ?></a></li>
<?php endif; ?>

<?php if (isset($item['children'])): ?>
    <ul class="list-unstyled">
        <?= $this->getMenuHtml($item['children']) ?>
    </ul>
<?php endif; ?>

<?php if ($item['parent_id'] == 0): ?>
    </div>
<?php endif; ?>