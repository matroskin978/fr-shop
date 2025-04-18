<section class="slider">
    <div class="container">
        <div id="carousel-indicators" class="carousel slide" data-bs-theme="dark" data-bs-ride="carousel"
             data-bs-interval="5000">
            <div class="carousel-indicators">
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-indicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0"
                        class="btn-dot active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1"
                        class="btn-dot" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2"
                        class="btn-dot" aria-label="Slide 3"></button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel-indicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/slider/1.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="carousel-text">
                                <h5>Golden Soft GS-200Z-5 для офиса</h5>
                                <div class="carousel-desc">
                                    <p>Замок дверной электронный Golden Soft GS-200Z-5 имеет роскошный
                                        глянцевый
                                        блеск, четкие линии, красивые формы.</p>
                                </div>
                                <div class="carousel-price">
                                    <strong>33 000₽</strong>
                                    <del>37 000₽</del>
                                    <p class="carosel-btn">
                                        <a href="#" class="btn btn-primary">Купить</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/slider/2.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="carousel-text">
                                <h5>Golden Soft GS-200Z-5 для квартиры</h5>
                                <div class="carousel-desc">
                                    <p>Замок дверной электронный Golden Soft GS-200Z-5 имеет роскошный
                                        глянцевый
                                        блеск, четкие линии, красивые формы.</p>
                                </div>
                                <div class="carousel-price">
                                    <strong>33 000₽</strong>
                                    <del>37 000₽</del>
                                    <p class="carosel-btn">
                                        <a href="#" class="btn btn-primary">Купить</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/slider/3.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="carousel-text">
                                <h5>Golden Soft GS-200Z-5 универсальный</h5>
                                <div class="carousel-desc">
                                    <p>Замок дверной электронный Golden Soft GS-200Z-5 имеет роскошный
                                        глянцевый
                                        блеск, четкие линии, красивые формы.</p>
                                </div>
                                <div class="carousel-price">
                                    <strong>33 000₽</strong>
                                    <del>37 000₽</del>
                                    <p class="carosel-btn">
                                        <a href="#" class="btn btn-primary">Купить</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="achievments">
    <div class="container">
        <div class="row gy-5">

            <div class="col-md-3 col-6 counter">
                <h3 class="counter-num">5,567</h3>
                <span>Счастливых клиентов</span>
            </div>

            <div class="col-md-3 col-6 counter">
                <h3 class="counter-num">1,245</h3>
                <span>Продуктов на выбор</span>
            </div>

            <div class="col-md-3 col-6 counter">
                <h3 class="counter-num">372</h3>
                <span>Продаж в день</span>
            </div>

            <div class="col-md-3 col-6 counter">
                <h3 class="counter-num">20</h3>
                <span>Лет на рынке</span>
            </div>

        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">

        <h1>Почему GoldenService?</h1>

        <div class="row row-gap-4">

            <div class="col-md-4">
                <div class="why-us-card">
                    <img src="assets/img/icons/evaluate.svg" alt="">
                    <p>Возврат удвоенной стоимости каждого замка в случае брака</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="why-us-card">
                    <img src="assets/img/icons/return.svg" alt="">
                    <p>Наносим ваш логотип компании на наш продукт</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="why-us-card">
                    <img src="assets/img/icons/repair.svg" alt="">
                    <p>Установка, обслуживание и гарантия в течение 3-х лет</p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php if (!empty($root_categories)): ?>
    <section class="main-categories">

        <div class="container">

            <h2>Категории</h2>

            <div class="row row-gap-4">

                <?php foreach ($root_categories as $category): ?>
                    <div class="col-6">
                        <div class="main-categories-card">
                            <a href="<?= base_href("/category/{$category['slug']}") ?>">
                                <div class="main-categories-card-thumb">
                                    <img src="<?= get_image($category['image']) ?>" alt="">
                                </div>
                            </a>

                            <div class="main-categories-card-desc">
                                <h3><?= h($category['title']) ?></h3>
                                <a href="<?= base_href("/category/{$category['slug']}") ?>" class="btn btn-outline-dark">Перейти</a>
                            </div>
                        </div>
                        <h3 class="main-categories-add-title"><?= h($category['title']) ?></h3>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>

    </section>
<?php endif; ?>

<?php if (!empty($sales_products)): ?>
    <section class="main-our-products">

        <div class="container">

            <div class="main-our-products-top">
                <h2>Популярные продукты</h2>

                <div class="slider-btn-wrap">
                    <span class="prev-btn"><i class="fa-solid fa-chevron-left"></i></span>
                    <span class="next-btn"><i class="fa-solid fa-chevron-right"></i></span>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                <?php foreach ($sales_products as $product): ?>
                    <?= view()->renderPartial('incs/product-card', ['product' => $product]) ?>
                <?php endforeach; ?>
            </div>

        </div>

    </section>
<?php endif; ?>

<section class="main-callback">
    <div class="container">
        <div class="row">

            <div class="col-md-8 offset-md-2">

                <h2>Мы Вам перезвоним</h2>
                <p class="text-center">Если у вас возникли какие-то вопросы или проблемы, заполните форму и
                    мы Вам
                    перезвоним.</p>

                <form>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Ваше имя">
                        </div>

                        <div class="col-lg-4">
                            <input type="text" class="form-control phone-mask" placeholder="Ваш телефон">
                        </div>

                        <div class="col-lg-4">
                            <button class="btn btn-primary" type="submit">Отправить</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>
