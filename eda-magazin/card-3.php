<?php include "header.php"; ?>
   
    <section class="card">
        <div class="container">
            <div class="card_top">
                <div class="card_img">
                    <img src="./img/card_bg.png" alt="">
                </div>
                <div class="card__sidebar">
                    <h3 class="card__sidebar-title">Говядина 250гр</h3>
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
                      <div class="reviews">
                          <p>Кол-во отзывов: <span>23</span></p>
                          <div class="card__sidebar-price">
                              <span>Цена за уп.</span>
                               <button>1 050 ₽</button>
                          </div>
                          <div class="card__sidebar-price">
                              <span>Кол-во шт в упаковке</span> <b>4 шт.</b>
                          </div>
                          <div class="card__sidebar-lot">
                            <span>Количество</span>
                            <div class="card__lot-input">
                                <div class="quantity_inner">        
                                    <button class="bt_minus" data-action="minus">-</button>
                                    <input type="text" class="quantity" value="1" data-max-count="23" data-counter>
                                    <button class="bt_plus" data-action="plus">+</button>
                                </div>
                                <p>Ед. изм.: упаковка</p>
                            </div>
                          </div>
                          <div class="card__sidebar-total">
                            <h4 class="card__total-title">Итого к оплате</h4>
                            <button class="card__total-button">1 050 ₽</button>
                          </div>
                          <div class="card__sidebar-btns">
                            <button class="card__buy">Купить</button>
                            <button class="card__basket"><img src="./img/busket_card.png" alt=""></button>
                          </div>
                      </div>
                </div>
            </div>
            <div class="card__bottom">
              <div class="card__bottom-description">
                <div class="card__descript-nav">
                  <ul>
                    <li class="descript__nav-li">
                      <a href="./card.php" class="descript__nav-link">О товаре</a>
                    </li>
                    <li class="descript__nav-li">
                      <a href="./card-2.php" class="descript__nav-link">Параметры</a>
                    </li>
                    <li class="descript__nav-li">
                      <a href="./card-3.php" class="descript__nav-link">Отзывы</a>
                    </li>
                  </ul>
                </div>
                  <div class="swiper cardSwiper card__swiper">
                    <div class="swiper-wrapper card__swipper-wrapper">
                      <div class="swiper-slide sw__slide-card">
                        <div class="sw__slide_card-top">
                          <img src="./img/chel__card.png" alt="">
                          <div class="slide__card_top_content">
                            <span>Анатолий Петров<button class="slide__card-top_button"><img src="./img/sms__card.png" alt=""></button></span>
                            <div class="rating rating_set rating__margin card__slide-rating" data-ajax="true">
                              <div class="rating__body card__slide-body">
                                <div class="rating__active card__slide-active"></div>
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
                            <a href="">vk.com/anatoliy</a>
                          </div>
                        </div>
                        <div class="sw__slide_card-bottom">
                          <p>Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магази<span id="dots">...</span><span id="more" class="sw__card-bigSpan">н Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магазин</span></p>
                          <button onclick="myFunction()" id="myBtn" class="slide__card_bottom-button">Читать полностью</button>
                        </div>
                      </div>
                      <div class="swiper-slide sw__slide-card">
                        <div class="sw__slide_card-top">
                          <img src="./img/chel__card.png" alt="">
                          <div class="slide__card_top_content">
                            <span>Анатолий Петров<button class="slide__card-top_button"><img src="./img/sms__card.png" alt=""></button></span>
                            <div class="rating rating_set rating__margin card__slide-rating" data-ajax="true">
                              <div class="rating__body card__slide-body">
                                <div class="rating__active card__slide-active"></div>
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
                            <a href="">vk.com/anatoliy</a>
                          </div>
                        </div>
                        <div class="sw__slide_card-bottom">
                          <p>Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магази<span id="dots">...</span><span id="more" class="sw__card-bigSpan">н Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магазин</span></p>
                          <button onclick="myFunction()" id="myBtn" class="slide__card_bottom-button">Читать полностью</button>
                        </div>
                      </div>
                      <div class="swiper-slide sw__slide-card">
                        <div class="sw__slide_card-top">
                          <img src="./img/chel__card.png" alt="">
                          <div class="slide__card_top_content">
                            <span>Анатолий Петров<button class="slide__card-top_button"><img src="./img/sms__card.png" alt=""></button></span>
                            <div class="rating rating_set rating__margin card__slide-rating" data-ajax="true">
                              <div class="rating__body card__slide-body">
                                <div class="rating__active card__slide-active"></div>
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
                            <a href="">vk.com/anatoliy</a>
                          </div>
                        </div>
                        <div class="sw__slide_card-bottom">
                          <p>Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магази<span id="dots">...</span><span id="more" class="sw__card-bigSpan">н Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магазин</span></p>
                          <button onclick="myFunction()" id="myBtn" class="slide__card_bottom-button">Читать полностью</button>
                        </div>
                      </div>
                      <div class="swiper-slide sw__slide-card">
                        <div class="sw__slide_card-top">
                          <img src="./img/chel__card.png" alt="">
                          <div class="slide__card_top_content">
                            <span>Анатолий Петров<button class="slide__card-top_button"><img src="./img/sms__card.png" alt=""></button></span>
                            <div class="rating rating_set rating__margin card__slide-rating" data-ajax="true">
                              <div class="rating__body card__slide-body">
                                <div class="rating__active card__slide-active"></div>
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
                            <a href="">vk.com/anatoliy</a>
                          </div>
                        </div>
                        <div class="sw__slide_card-bottom">
                          <p>Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магази<span id="dots">...</span><span id="more" class="sw__card-bigSpan">н Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магазин</span></p>
                          <button onclick="myFunction()" id="myBtn" class="slide__card_bottom-button">Читать полностью</button>
                        </div>
                      </div>
                      <div class="swiper-slide sw__slide-card">
                        <div class="sw__slide_card-top">
                          <img src="./img/chel__card.png" alt="">
                          <div class="slide__card_top_content">
                            <span>Анатолий Петров<button class="slide__card-top_button"><img src="./img/sms__card.png" alt=""></button></span>
                            <div class="rating rating_set rating__margin card__slide-rating" data-ajax="true">
                              <div class="rating__body card__slide-body">
                                <div class="rating__active card__slide-active"></div>
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
                            <a href="">vk.com/anatoliy</a>
                          </div>
                        </div>
                        <div class="sw__slide_card-bottom">
                          <p>Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магази<span id="dots">...</span><span id="more" class="sw__card-bigSpan">н Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магазин</span></p>
                          <button onclick="myFunction()" id="myBtn" class="slide__card_bottom-button">Читать полностью</button>
                        </div>
                      </div>
                      <div class="swiper-slide sw__slide-card">
                        <div class="sw__slide_card-top">
                          <img src="./img/chel__card.png" alt="">
                          <div class="slide__card_top_content">
                            <span>Анатолий Петров<button class="slide__card-top_button"><img src="./img/sms__card.png" alt=""></button></span>
                            <div class="rating rating_set rating__margin card__slide-rating" data-ajax="true">
                              <div class="rating__body card__slide-body">
                                <div class="rating__active card__slide-active"></div>
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
                            <a href="">vk.com/anatoliy</a>
                          </div>
                        </div>
                        <div class="sw__slide_card-bottom">
                          <p>Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магази<span id="dots">...</span><span id="more" class="sw__card-bigSpan">н Заказал 5кг мяса, живу в Московской области. Как и обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое еще по дороге. Действительно натуральные продукты. Я обязательно буду заказывать дальше. А теперь подробнее о плюсах и минусах всего магазин</span></p>
                          <button onclick="myFunction()" id="myBtn" class="slide__card_bottom-button">Читать полностью</button>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-button-next swiper__card-next"></div>
                    <div class="swiper-button-prev swiper__card-prev"></div> 
                  </div>
                  <div class="card_3__button">
                    <button>Добавить отзыв</button>
                  </div>
                </div>
              <div class="card__bonus">
                <h4>Закажите на 3000 RUB и получите</h4>
                <div class="card__moneybox">
                  <!-- <img src="./img/bonus-img1.png" alt=""> -->
                  <p><img src="./img/bonus-img1.png" alt=""><span>30 RUB</span> на бонусный счет</p>
                </div>
                <div class="card__bonus-deliv">
                  <!-- <img src="./img/bonus-img2.png" alt=""> -->
                  <p><img src="./img/bonus-img2.png" alt="">Бесплатная доставка</p>
                </div>
                <div class="range__slide">
                  <p class="topRange__text"><span>1000</span> (минимальный заказ)</p>
                  <div class="range__line">
                    <div class="round">
                      <div class="line-wrapper">
                        <span class="span-min">0</span>
                        <div class="line__items">
                            <div class="line1"></div>
                            <div class="line2"></div>
                        </div>
                        <span class="span-max">3000</span>
                      </div>
                    </div>
                  </div>
                  <p class="range__text">Осталось <span><button>1988</button> RUB</span> до бесплатной доставки</p>
                </div>
              </div>
            </div>
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

let cardProduct = document.querySelector('.card__product'),
          cardParament = document.querySelector('.card__parametr'),
          card__swiper = document.querySelector('.card__swiper'),
          card1 = document.querySelector('.card-1'),
          card2 = document.querySelector('.card-2'),
          card3 = document.querySelector('.card-3');

          card1.addEventListener('click', () => {
            if(!card1.classList.contains('card-active')) {
              card1.classList.add('card-active');
              if(card1.classList.contains('card-active')) {
                card2.classList.remove('card-active');
                card3.classList.remove('card-active');
                cardProduct.style.display = 'block';
                cardParament.style.display = 'none';
                card__swiper.style.display = 'none';
              }
            }
          })
          card2.addEventListener('click', () => {
            if(!card2.classList.contains('card-active')) {
              card2.classList.add('card-active');
              if(card2.classList.contains('card-active')) {
                card1.classList.remove('card-active');
                card3.classList.remove('card-active');
                cardParament.style.display = 'block';
                cardProduct.style.display = 'none';
                card__swiper.style.display = 'none';
              }
            }
          })
          card3.addEventListener('click', () => {
            if(!card3.classList.contains('card-active')) {
              card3.classList.add('card-active');
              if(card3.classList.contains('card-active')) {
                card2.classList.remove('card-active');
                card1.classList.remove('card-active');
                card__swiper.style.display = 'block';
                cardParament.style.display = 'none';
                cardProduct.style.display = 'none';
              }
            }
          })

          var swiperReviews = new Swiper(".cardSwiper", {
        slidesPerView: 2,
        // spaceBetween: 16,
        // slidesPerGroup: 3,
        loopFillGroupWithBlank: true, 
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });


        function myFunction() {
        let dots = document.getElementById("dots");
        let moreText = document.getElementById("more");
        let btnText = document.getElementById("myBtns");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Читать больше";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "меньше";
          moreText.style.display = "inline";
        }
      }

    </script>

    <?php include "footer.php"; ?>