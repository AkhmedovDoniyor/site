

<?php // Подключение базы данных

  $conntect = new PDO("mysql: dbhost=localhost; dbname=pirosmani", 'root', '');
  $sql = "SELECT * FROM `todo` WHERE id"; /* Выбераем по запросу всю таблицу */
  // $query = 
?>
  <?php include "header.php"; ?>
  <?php include "functions.php" ?>


<div class="mobile__bottom-menu">
  <a href="" class="mob_active" >
    <img src="./img/m1.svg" alt="">
  </a>
  <a href="" >
    <img src="./img/m2.svg" alt="">
  </a>
  <a href="#popup-4" data-count="1" class="mob__card popup-link" >
    <img src="./img/m3.svg" alt="">
  </a>
  <a href="" >
    <img src="./img/m4.svg" alt="">
  </a>
</div>


    <section class="section_home home-banner">
      <div class="container">
        <button class="home__popup-button"><a class="home__buttonLink popup-link" href="#popup-2">Забронировать стол</a> <img src="./img/home__popupButton.png" alt=""></button>
        <div class="row">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">

              <?php for($i = 2; $i < count($images); $i++): ?>
              <div class="swiper-slide block">
                <img src="./img/slides/<?php echo $images[$i]; ?>" alt="">
                <h2>Подарок на первый заказ.</h2>
                <p>Получите 500 рублей за подписку на рассылку</p>
                <a href="#" class="btn">Подписаться</a>
              </div>
              <?php endfor; ?>


            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__swiper-menu">
      <div class="container swiper__menu-cont">
        <div class="swiper-container-menu swiper__menu-child">
          <div class="swiper-wrapper sw_menu">
            <a href="" class="swiper-slide sw__menu-link">
              <span>Супы</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Хачапури</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link sw_zb">
              <span>Холодные закуски</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Хинкали</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Шашлык</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Соусы</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Салаты</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Горячие блюда</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Гарнир</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Десерты</span>
            </a>
            <a href="./indexOne.php" class="swiper-slide sw__menu-link">
              <span>Напитки</span>
            </a>
          </div>
          <div class="swiper-button-next sw_next"></div>
          <div class="swiper-button-prev sw_prev"></div>
        </div>
      </div>
    </section>

    <section class="section__home-product">
      <div class="container">
        <div class="row">
          <h3 class="products__wrapper-title">Все товары</h3>
          <div class="products-wrapper">
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body ">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
            <div class="product">
              <div class="product-img">
                <img src="#" alt="">
              </div>
              <a href="./card.php" class="product-link">Голень Говядины</a>
              <p class="product__desc">Описание мраморной говядины, состоящее из нескольких преложений. Можно наполнить.</p>
              <div class="rating rating_set rating__margin" data-ajax="true">
                <div class="rating__body">
                  <div class="rating__active"></div>
                  <div class="rating__items">
                    <input type="radio" value="1" name="rating" class="rating__item">
                    <input type="radio" value="2" name="rating" class="rating__item">
                    <input type="radio" value="3" name="rating" class="rating__item">
                    <input type="radio" value="4" name="rating" class="rating__item">
                    <input type="radio" value="5" name="rating" class="rating__item">
                  </div>
                </div>
                <div class="rating__value">3.7</div>
              </div>
              <div class="price">
                <b>1 050 ₽/кг</b>
                <span> За 500гр. </span>
              </div>
              <div class="cart__kor">
                <button class="tob__cart">В корзину</button>
              </div>
            </div>
          </div>
          <div class="pogination__block">
            <div class="pagination">
              <ul class="pogination__items">
                  <li class="btn prev"><span><i class="fas fa-angel-left"></i>Prev</span></li>
                  <li class="numb active"><span>1</span></li>
                  <li class="numb"><span>2</span></li>
                  <li class="dots"><span>...</span></li>
                  <li class="numb"><span>4</span></li>
                  <li class="numb"><span>5</span></li>
                  <li class="dots"><span>...</span></li>
                  <li class="numb"><span>7</span></li>
                  <li class="btn next"><span>Next<i class="fas fa-angel-left"></i></span></li>
              </ul>
          </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section__home-video">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item ytvideo" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <button class="video_button"><img class="play_yt" src="./img/play.png" alt=""></button>
      </div>
    </section>

    <section class="section__delovery">
      <div class="container">
        <div class="delovery__content">
          <div class="delovery__content-item">
            <h3 class="delovery__content-title">Бесплатная доставка по Москве и Области от 2999 RUB!</h3>
            <a href="" class="delovery__content-link">Оформить</a>
          </div>
          <img class="delovery-img" src="./img/home_car.png" alt="">
        </div>
      </div>
    </section>

      <script>

          var plays = document.querySelector('.video_button');
          var videos = document.querySelector('.ytvideo');

          plays.addEventListener('click', function() {
              videos.setAttribute('src', './video/Часы на JavaScript. Крутые рабочие аналоговые часы. ( 1080 X 1920 60fps ).mp4');
              plays.style.display = 'none';
          })




          var swiper = new Swiper(".mySwiper", {
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
              slidesPerView: 1,
            },
          });

          var swiper = new Swiper(".swiper-container-menu", {
              slidesPerView: 'auto',
              spaceBetween: 95,
              freeMode: true,
              // loop: true,
              // loopFillGroupWithBlank: true,
              navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });



      </script>

    <?php include "footer.php"; ?>

