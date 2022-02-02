<?php include 'functions.php'; ?>

<footer class="home__footer">
      <div class="container">
        <div class="footer__wrapper_home">
          <div class="footer__home-left">
            <div class="footer__home_left-content">
              <div class="footer__home-phone">
                <span>Бесплатный звонок по РФ</span>
                <a href="tell:+78312826000">+7 (831) 282-60-00</a>
              </div>
              <div class="footer__home-phone">
                <span>Для приема заказов</span>
                <a href="tell:+79040664685">+7 (904) 066-46-85</a>
              </div>
            </div>
            <div class="footer__home-worktime">
              <h4>График работы по будням с 9:00 до 18:00</h4>
              <div class="footer__home_email">
                <a href="email: info@.ru" class="footer__home-emaillink">Email: info@.ru</a>
                <a href="./support.php" class="footer__home-support">Поддержка</a>
              </div>
            </div>
          </div>
          <div class="footer__home-center">
            <a href=""> Мы в вконтакте > </a>
            <a href=""> Мы в instagram > </a>
          </div>
          <div class="footer__home-right">
            <div class="footer__home-person">
              <a href="" class="footer__home-personImg"><img src="./img/person1.png" alt="person"></a>
              <a href="#popup" class="footer__home-personLink popup-link"><span>Войти / Регистрация</span></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
   </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="http://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="http://unpkg.com/swiper/swiper-bundle.min.css">


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="http://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./script/star/star.js"></script>
    <script src="./script/pogination/pogi.js"></script>
    <script src="./script/plusOrMinus/plus.js"></script>
    <script src="./script/line/line.js"></script>
    <script src="./script/counter/counter.js"></script>
    


   
   <div class="popup" id="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a class="popup__close close-popup"><img src="./img/popup_close.png" alt="Esc"></a>
            <img src="./img/person-popup.png" alt="">
            <div class="popup__title">Войти в личный кабинет</div>
            <div class="popup__text">
               <form action="./check.php" method="post">
                  <input type="tel" placeholder="Телефон" class="popup__tell-index" name="tell" id="tell">
                  <input type="password" placeholder="Пароль" class="popup__key-index" name="pass" id="pass">
                  <button class="popup__porol"><a href="">Забыли пароль?</a></button>
                  <button class="popup__open" type="submit">Войти</button>
                  <span class="popupIndex__span">Впервые у нас?<button class="popup__regist">Зарегистрироваться</button></span>
                  <input type="password" placeholder="Подтвердите пароль" class="popup__key-index downKey" name="downKey" id="downKey">
                  <div class="agreement__popup">
                    <div class="agreem__popup-top">
                      <button></button>
                      <span>Хочу получать выгодные предложения от магазина</span>
                    </div>
                    <div class="agreem__popup-buttom">
                      <button class="active__agreem"></button>
                      <span>Принимаю условия. <b class="active__agreem-b active_b">Пользовательского соглашения, Политики конфиденциальности</b></span>
                    </div>
                    <button class="popup__open reg__agreem" type="submit">Зарегистрироваться</button>
                  </div>
               </form>
            </div>
        </div>
        <div class="popup__content popup__pochta">
          <a class="popup__close close-popup"><img src="./img/popup_close.png" alt="Esc"></a>
            <img src="./img/popup__pochta.png" alt="">
            <h2>Подпишитесь на нашу рассылку и получите промокод на 500 RUB!</h2>
            <form action="">
              <input type="text" placeholder="E-mail" class="popup__email-index">
              <button class="popup__open popup__pochta-btn">Войти</button>
            </form>
        </div>
    </div>
</div>


   <div class="popup" id="popup-2">
    <div class="popup__body">
        <div class="popup__content stol__content">
            <a class="popup__close close-popup"><img src="./img/popup_close.png" alt="Esc"></a>
            <div class="popup__title">Бронирование стола</div>
            <div class="popup__text stol__popup_text">
                <input type="text" placeholder="Имя" class="popup__emails-index popup__stol-name">
                <div class="stol__popup-items">
                  <div class="stol__popup_left">
                    <input type="text" placeholder="+998" class="popup__emails-index popup__stol-tell">
                    <input type="text" placeholder="Время: <?php echo $hours; echo ':'; echo $minutes; ?>" class="popup__emails-index popup__stol-watch">
                  </div>
                  <div class="stol__popup_right">
                    <input type="text" placeholder="Количество человек" class="popup__emails-index popup__stol-number">
                    <input type="date" placeholder="Дата:  дд.мм.гг" class="popup__emails-index popup__stol-date">
                  </div>
                </div>
                <button class="popup__open">Войти</button>
            </div>
        </div>
    </div>
</div>


   <div class="popup" id="popup-4">
    <div class="popup__body">
        <div class="popup__content mob__korzina-popup">
            <a class="popup__close close-popup"><img src="./img/popup_close.png" alt="Esc"></a>
            <div class="popup__title-mob">Бронирование стола</div>
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
            <div class="korzina__right-bottom">
              <h4>Промокод</h4>
              <div class="korina__right_bottom-form">
                  <input type="text" placeholder="Введите промокод">
                  <button class="form__korzina-button">Подтвердить</button>
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
        </div>
    </div>
</div>



          <script src="./script/popup/popup.js"></script>
  </body>
</html>