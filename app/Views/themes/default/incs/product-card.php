<?php /** @var array $product */ ?>
<div class="product-card item">
    <div class="product-card-offer">
        <?php if ($product['in_stock']): ?>
            <div class="in-stock">
                <i class="fa-solid fa-check"></i>
                <span>В наличии</span>
            </div>
        <?php else: ?>
            <div class="not-in-stock">
                <i class="fa-solid fa-xmark"></i>
                <span>Нет в наличии</span>
            </div>
        <?php endif; ?>
        <?php if ($product['is_sale']): ?>
            <div class="in-sale">sale</div>
        <?php endif; ?>
    </div>
    <div class="product-card-thumb">
        <a href="<?= base_href("/product/{$product['slug']}") ?>"><img
                src="<?= get_image($product['image']) ?>" alt="<?= h($product['title']) ?>"></a>
    </div>
    <div class="product-card-details">
        <h4 class="product-card-title"><a
                href="<?= base_href("/product/{$product['slug']}") ?>"><?= h($product['title']) ?></a>
        </h4>
        <div class="product-card-details-bottom">
            <div class="product-card-price">
                $<?= $product['price'] ?>
                <?php if ($product['old_price']): ?>
                    <del>$<?= $product['old_price'] ?></del>
                <?php endif; ?>
            </div>
            <div class="product-card-btns">
                <a href="#" class="btn btn-outline-secondary add2cart"><i
                        class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </div>
</div>
