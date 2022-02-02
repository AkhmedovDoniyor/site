<?php include "header.php"; ?>
        
    <section class="profile">
        <div class="container">
            <div class="profile__content">
                <div class="profile__content-ictives">
                    <div class="profile__content-personal active-profile">
                        <img src="./img/profili-1.png" alt="" class="personal-img">
                        <span>Личные данные</span>
                    </div>
                    <div class="profile__content-story">
                        <img src="./img/profile-2.png" alt="" class="story-img">
                        <span>История заказов</span>
                    </div>
                </div>
                <div class="personal__content">
                    <div class="personal__content-items">
                      <div class="personal__content-left">
                        <div class="personal__content-ImgLabel">
                            <h2><b>Персональная информация</b></h2>
                            <div class="personal__left-downloadImgItem">
                                <div class="photo"></div>
                                <input type="file" id="file">
                                <label for="file">Загрузить фотографию</label>
                            </div>
                        </div>
                        <div class="personal__content-nameItem">
                            <div class="personal__content-item">
                                <div class="personal__name">
                                    <span>Ваше имя</span>
                                    <input type="text" placeholder="Имя">
                                </div>
                                <div class="personal__surename">
                                    <span>Ваша фамилия</span>
                                    <input type="text" placeholder="Фамилия">
                                </div>
                            </div>
                            <div class="personal__patronymic">
                                <span>Ваше отчество</span>
                                <input type="text" placeholder="Отчество">
                            </div>
                            <div class="personal__email">
                                <span>Адрес электронной почты</span>
                                <input type="text" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="personal__content-right">
                        <h3><b>Контактная информация</b> 
                            (подтверждение заказов)</h3>
                        <div class="personal__right-tells">
                            <div class="personal__right-tell">
                                <span>Основной телефон</span>
                                <input type="text" placeholder="+998">
                            </div>
                            <div class="personal__right-additional">
                                <span>Дополнительный</span>
                                <input type="text" placeholder="+998">
                            </div>
                        </div>
                        <div class="personal__password">
                            <div class="personal__OldPassword">
                                <span>Ваш старый пароль</span>
                                <input type="text" placeholder="Старый пароль">
                            </div>
                            <div class="personal__NewPassword">
                                <span>Ваш новый пароль</span>
                                <input type="text" placeholder="Новый пароль">
                            </div>
                            <div class="personal__ConfinPassword">
                                <span>Подтверждение</span>
                                <input type="text" placeholder="Подтвердите пароль">
                            </div>
                            <button>Сохранить изменения</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="story__items">
                    <div class="story__items-content">
                      <div class="story__content">
                        <div class="story__content-number">
                          <span class="story__number-spanTop">Номер заказа: </span>
                          <span class="story__number-span">Заказ №<button>2334678954</button><img src="./img/story__strelka.png" alt=""></span>
                        </div>
                        <div class="story__content-payment">
                          <span>Способ оплаты:</span>
                          <button>Банковская карта</button>
                        </div>
                        <div class="story__content-date">
                          <span>Дата заказа:</span>
                          <button>19.05.2020</button>
                        </div>
                        <div class="story__content-delivery">
                          <span>Дата доставки:</span>
                          <button>23.05.2020</button>
                        </div>
                        <div class="story__content-status">
                          <span>Статус заказа:</span>
                          <button>Доставлен</button>
                        </div>
                      </div>
                      <div class="story__sum">
                        <div class="story__sum-content">
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
                          <div class="story__sum-reboot">
                            <button>Повторить заказ<img class="story-icon" src="./img/story-icon.png" alt=""></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="story__items-content">
                      <div class="story__content storyDisptlayNone">
                        <div class="story__content-number">
                          <span class="story__number-spanTop">Номер заказа: </span>
                          <span class="story__number-span">Заказ №<button>2334678954</button><img src="./img/story__strelka.png" alt=""></span>
                        </div>
                        <div class="story__content-payment">
                          <span>Способ оплаты:</span>
                          <button>Банковская карта</button>
                        </div>
                        <div class="story__content-date">
                          <span>Дата заказа:</span>
                          <button>19.05.2020</button>
                        </div>
                        <div class="story__content-delivery">
                          <span>Дата доставки:</span>
                          <button>23.05.2020</button>
                        </div>
                        <div class="story__status-can">
                          <span>Статус заказа:</span>
                          <button class="story__status-cancel">Отменен</button>
                        </div>
                      </div>
                      <div class="story__sum">
                        <div class="story__sum-content">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

      let personal = document.querySelector('.profile__content-personal');
      let story = document.querySelector('.profile__content-story');
      let persImg = document.querySelector('.personal-img');
      let storyImg = document.querySelector('.story-img');
      let persContent = document.querySelector('.personal__content');
      let storyContent = document.querySelector('.story__items');
        personal.addEventListener('click', () => {
            if(!personal.classList.contains('active-profile')) {
                personal.classList.add('active-profile');
                if (personal.classList.contains('active-profile')) {
                    storyImg.setAttribute('src', './img/profile-2.png');
                    persImg.setAttribute('src', './img/profili-1.png');
                    persContent.style.display = 'block';
            };
            };
            if (story.classList.contains('active-profile')) {
                story.classList.remove('active-profile');
                storyContent.style.display = 'none';
            };
        });
        story.addEventListener('click', () => {
            if(!story.classList.contains('active-profile')) {
                story.classList.add('active-profile');
                if(story.classList.contains('active-profile')) {
                    persImg.setAttribute('src', './img/profile-3.png');
                    storyImg.setAttribute('src', './img/profile-4.png');
                    storyContent.style.display = 'block';
                };
            };
            if (personal.classList.contains('active-profile')) {
                personal.classList.remove('active-profile');
                persContent.style.display = 'none';
            };
        });


        // let storyContents = document.querySelectorAll('.story__content');
        // let storySumms = document.querySelectorAll('.story__sum');
        // let storyNumbers = document.querySelectorAll('.story__number-span');
        // let storyDates = document.querySelectorAll('.story__content-date');
        // let storyDeliverys = document.querySelectorAll('.story__content-delivery');
        // let storyStatus = document.querySelectorAll('.story__content-status');
        // let storyStatusBottons = document.querySelectorAll('.story__content-status button');
        // let storyPayments = document.querySelectorAll('.story__content-payment');
        // // let storyImg = document.querySelectorAll('.story__content-number img');
        // let storySpanTops = document.querySelectorAll('.story__number-spanTop');
        // let storyContentNumbers = document.querySelectorAll('.story__content-number');

        
        //   if(storySumms.length > 0) {
        //     for(let i = 0; i < storyNumbers.length; i++) {
        //       const storyNumber = storyNumbers[i];
        //       storyNumber.addEventListener('click', () => {
        //         for(let x = 0; x < storyStatusBottons.length; x++) {
        //           const storyStatusBotton = storyStatusBottons[x];
        //           if(storyStatusBotton.textContent === 'Доставлен') {
        //             for(let q = 0; q < storySpanTops.length; q++) {
        //               const storySpanTop = storySpanTops[i];
        //               storySpanTop.style.display = 'none';
        //             }
        //             for(let e = 0; e < storyPayments.length; e++) {
        //               const storyPayment = storyPayments[e];
        //               storyPayment.style.display = 'none';
        //             }
        //             for(let r = 0; r < storyDates.length; r++) {
        //               const storyDate = storyDates[r];
        //               storyDate.style.display = 'none';
        //             }
        //             for(let t = 0; t < storyDeliverys.length; t++) {
        //               const storyDelivery = storyDeliverys[t];
        //               storyDelivery.style.display = 'none';
        //             }
        //             for(let y = 0; y < storyStatus.length; y++) {
        //               const storyStatu = storyStatus[y];
        //               storyStatu.style.display = 'none';
        //             }
        //             for(let u = 0; u < storySumms.length; u++) {
        //               const storySumm = storySumms[y];
        //               storySumm.style.display = 'block';
        //             }

        //           }
        //         }
        //       })
        //     }
        //   }
          // for(let x = 0; x < storyStatusBottons.length; x++) {
          //         const storyStatusBotton = storyStatusBottons[x];
          //         console.log(storyStatusBotton.textContent);

          // }
        

        

    </script>

    <?php include "footer.php"; ?>