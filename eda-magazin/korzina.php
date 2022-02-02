<?php include "header.php"; ?>
    <section class="korzina__content">
            <div class="container">
                <div class="korzina__content-wrapper">
                    <div class="korzina__content_wrapper-left">
                        <div class="korzina__item-menu">
                            <h1>Корзина</h1>
                            <div class="korzina-items_mune-tov">
                                <div class="korzina__item_menu-tov">
                                    <button class="korzine__menu-x"><img src="./img/plus.svg" alt=""></button>
                                    <img class="korzina__menu-img" src="./img/korzina-img.png" alt="">
                                    <span>Хачапури</span>
                                    <div class="card__lot-input korzina__menu-input">
                                        <div class="quantity_inner">        
                                            <button class="bt_minus" data-action="minus">-</button>
                                            <input type="text" class="quantity" value="1" data-max-count="23" data-counter>
                                            <button class="bt_plus" data-action="plus">+</button>
                                        </div>
                                    </div>
                                    <button class="korzina__item_menu-price">350 ₽</button>
                                </div>
                                <div class="korzina__item_menu-tov">
                                    <butto class="korzine__menu-x"><img src="./img/plus.svg" alt=""></butto>
                                    <img class="korzina__menu-img" src="./img/korzina-img.png" alt="">
                                    <span>Хачапури</span>
                                    <div class="card__lot-input korzina__menu-input">
                                        <div class="quantity_inner">        
                                            <button class="bt_minus" data-action="minus">-</button>
                                            <input type="text" class="quantity" value="1" data-max-count="23" data-counter>
                                            <button class="bt_plus" data-action="plus">+</button>
                                        </div>
                                    </div>
                                    <button class="korzina__item_menu-price">350 ₽</button>
                                </div>
                            </div>
                        </div>
                        <div class="korina__item-bonus">
                            <h3>Закажите на 3000 RUB и получите</h3>
                            <div class="korzina__bonus-content">
                                <img src="./img/bonus-img1.png" alt="">
                                <p>30 RUB <span class="korzina__bonus-span">на бонусный счет</span></p>
                            </div>
                            <div class="korzina__bonus-content">
                                <img src="./img/bonus-img2.png" alt="">
                                <p>Бесплатная доставка</p>
                            </div>
                            <div class="range__slide">
                                <p class="topRange__text-korzina"><span>1000</span> (минимальный заказ)</p>
                                <div class="range__line">
                                  <div class="round">
                                    <div class="line-wrapper">
                                      <span class="span__min-kokrzina">0</span>
                                      <div class="line__items-korzina">
                                          <div class="line1-kor"></div>
                                          <div class="line2-kor"></div>
                                      </div>
                                      <span class="span__max-korzina">3000</span>
                                    </div>
                                  </div>
                                </div>
                                <p class="range__text-kor">Осталось <span><button>1988</button> RUB</span> до бесплатной доставки</p>
                              </div>
                        </div>
                    </div>
                    <div class="korzina__content_wrapper-right">
                        <div class="korzina__right-top">
                            <h3>Заказ №<span class="korzina__rightTop-titleSpan"> 47593</span></h3>
                            <div class="korzina__rightTop-price">
                                <h5>Товаров в корзине</h5>
                                <span><button>700</button> ₽</span>
                            </div>
                            <div class="korzine__rightTop-promocode">
                                <h5>Промокод</h5>
                                <span>-<button>100</button> ₽</span>
                            </div>
                            <div class="korzina__rightTop-total">
                                <h5>Итого к оплате</h5>
                                <span><button>600</button> ₽</span>
                            </div>
                            <button class="korina__rightTop-arrange"><a href="./registration.php">Оформить заказ</a></button>
                        </div>
                        <div class="korzina__right-bottom">
                            <h4>Промокод</h4>
                            <div class="korina__right_bottom-form">
                                <input type="text" placeholder="Введите промокод">
                                <button class="form__korzina-button">Подтвердить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "footer.php"; ?>