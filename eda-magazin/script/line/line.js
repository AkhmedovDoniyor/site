     window.addEventListener('click', function(event) {

          let counter;

          if(event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus') {
               const counterWrapper = event.target.closest('.card__lot-input');
               counter = counterWrapper.querySelector('[data-counter]');
          }


          // Проверяем является ли элемент кнопкой плюс
          if(event.target.dataset.action === 'plus') {
               counter.innerText = ++counter.innerText;
          }

          if(event.target.dataset.action === 'minus') {
               if(counter.innerText > 1) {
                    counter.innerText = --counter.innerText;
               }
          }
     })
     
     
     
     
     
     
     
     // let line = document.querySelector('.line2');
     // let line2 = document.querySelector('.card__total-button');
     // let answer_line2;
     //      if (line2 < 3000) {
     //           answer_line2 = Math.round((line2 / 3000) * 100);
     //      } else if (line2 >= 3000) {
     //           answer_line2 = 100;
     //      } else {
     //           console.log('Введите число больше нуля');
     //      };
     // line.style.width = `${answer_line2}%`;

