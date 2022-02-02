<?php include "header.php"; ?>
    <section class="registration">
        <div class="container">
          <div class="regist__content">
            <div class="regist__content-left">
              <div class="regist__content-leftTop">
                <h2>Оформление заказа</h2>
                <h3>Вы заказали:</h3>
                <div class="regist__leftTop-orders">
                  <div class="regist__leftTop-order">
                    <button class="regist__leftTop-x"><img src="./img/plus.svg" alt=""></button>
                    <div class="regist__leftTop-itemImg"><img src="./img/regist-img.png" alt=""></div>
                    <span>Хачапури</span>
                        <div class="card__lot-input regist__leftTop-input">
                            <div class="quantity_inner">        
                                <button class="bt_minus" data-action="minus">-</button>
                                <input type="text" class="quantity" value="1" data-max-count="23" data-counter>
                                <button class="bt_plus" data-action="plus">+</button>
                            </div>
                            <span>Ед. изм.: упаковка</span>
                        </div>
                    <button class="korzina__item_menu-price">350 ₽</button>
                  </div>
                  <div class="regist__leftTop-order">
                    <button class="regist__leftTop-x"><img src="./img/plus.svg" alt=""></button>
                    <div class="regist__leftTop-itemImg"><img src="./img/regist-img.png" alt=""></div>
                    <span>Хачапури</span>
                        <div class="card__lot-input regist__leftTop-input">
                            <div class="quantity_inner">        
                                <button class="bt_minus" data-action="minus">-</button>
                                <input type="text" class="quantity" value="1" data-max-count="23" data-counter>
                                <button class="bt_plus" data-action="plus">+</button>
                            </div>
                            <span>Ед. изм.: упаковка</span>
                        </div>
                    <button class="korzina__item_menu-price">350 ₽</button>
                  </div>
                </div>
              </div>
              <div class="regist__content-leftBottom">
                  <div class="rigist__leftBottom-link">
                      <button class="rigist__leftBottom_link-button reg-active"><a href="#">Доставка</a></button>
                      <span class="rigist__leftBottom_link-span"><a href="./finishRegist.php">Самовывоз (- 20%)</a></span>
                      <div class="registor__leftBottom-totalItem">
                          <div class="registor__leftBottom-total">
                              <h6>Итого</h6>
                              <span>700 ₽ </span>
                              <p>Итого к оплате</p>
                          </div>
                          <div class="registor__leftBottom-delivery">
                              <h6>Доставка</h6>
                              <span>0  ₽</span>
                              <b>700 ₽</b>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="regist__content-right">
                <div class="regist__right-district">
                    <span>Район доставки</span>
                    <input type="text" placeholder="Выбрать">
                </div>
                <div class="regist__right-FIO">
                    <span>ФИО</span>
                    <input type="text" placeholder="Введите Ваше полное имя">
                </div>
                <div class="regist__right-tell">
                    <span>Телефон</span>
                    <input type="text" placeholder="+998">
                </div>
                <div class="regist__right-address">
                    <span>Адрес доставки</span>
                    <input type="text" placeholder="Введите адрес доставки">
                </div>
                <div class="regist__right-payment">
                    <span>Способ оплаты</span>
                    <input type="text" placeholder="Наличные">
                </div>
                <div class="regist__right-coments">
                    <button class="regist__right-coments_button">Добавить комментарий.</button>
                </div>
                <button class="regist__right-button"><a href="./profile.php">Оформить заказ</a></button>
            </div>
          </div>
        </div>
      </section>

      <script>

        // для registration.html (comment)

    function rer() {
        let item_comment = document.querySelector('.regist__right-coments');
        let comment_button = document.querySelector('.regist__right-coments_button');

        comment_button.addEventListener('click', function() {
             comment_button.style.display = 'none';
             // item_comment.innerHTML = '<p class="reg__right__comment-desc">Комментарий к заказу</p>';
             item_comment.innerHTML = '<p class="reg__right__comment-desc">Комментарий к заказу</p><input type="text" placeholder="Введите ваш комментарий...">';
        })
   }
   rer();

      </script>

      <?php include "footer.php"; ?>

