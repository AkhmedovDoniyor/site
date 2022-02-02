<?php include "header.php"; ?>
    <section class="registration">
        <div class="container finishRegist">
            <h2>Оформление заказа</h2>
            <h3>Вы заказали:</h3>
          <div class="regist__content">
            <div class="regist__content-left">
              <div class="regist__content-leftTop">

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
                      <button class="rigist__leftBottom_link-button"><a href="./registration.php">Доставка</a></button>
                      <span class="rigist__leftBottom_link-span reg-active"><a href="">Самовывоз (- 20%)</a></span>
                      <div class="registor__leftBottom-totalItem">
                          <div class="registor__leftBottom-total">
                              <h6>Итого</h6>
                              <span>700 ₽ </span>
                              <p>Итого к оплате</p>
                          </div>
                          <div class="registor__leftBottom-delivery">
                              <h6>Доставка</h6>
                              <span>140  ₽</span>
                              <b>560 ₽</b>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="regist__content-right">
                <div class="regist__right-FIO">
                    <span>ФИО</span>
                    <input type="text" placeholder="Введите Ваше полное имя">
                </div>
                <div class="regist__right-tell">
                    <span>Телефон</span>
                    <input type="text" placeholder="+998">
                </div>
                <div class="regist__right-payment regist__right-time">
                    <span>Когда заберете?</span>
                    <input type="text" placeholder="В ближайшее время">
                </div>
                <button class="regist__right-button"><a href="./profile.php">Оформить заказ</a></button>
            </div>
          </div>
        </div>
      </section>

      <?php include "footer.php"; ?>