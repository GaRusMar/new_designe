const realfileBtn = document.getElementById('upload-file');
const customBtn = document.getElementById('upload-button');
const customTxt = document.getElementById('upload-text');
if (customBtn)
    customBtn.addEventListener('click', function () {
        realfileBtn.click();
    });

if (realfileBtn)
    realfileBtn.addEventListener('change', function () {
        if (realfileBtn.value) {
            customTxt.innerHTML = realfileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
        } else {
            customTxt.innerHTML = "Файл не выбран";
        }
    })


let btnMenu = document.querySelector('.header__gamburger').addEventListener('click', () => {
    document.querySelector('.header__gamburger').classList.toggle('active')
    document.querySelector('.header__menu ul').classList.toggle('active');
    document.querySelector('body').classList.toggle('active');
});


$(function () {
    $('.services__list').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        arrows: true,
        dots: false,
        prevArrow: document.querySelector(".services__arrow-prev"),
        nextArrow: document.querySelector(".services__arrow-next"),
        responsive: [{
            breakpoint: 1200,
            settings: 'unslick'
        }]
    });

    $(window).on('resize', function () {
        $('.services__list').slick('resize');
    });

});

let btnsModal = document.querySelectorAll('.btn--modal'),
btnModal = [];

for (let i = 0; i < btnsModal.length; i++) {
    btnModal[i] = btnsModal[i].addEventListener('click', () => {
        document.querySelector('.modal').classList.add('modal--open')
    });
}

let btnCloseModal = document.querySelector('.modal__close').addEventListener('click', () => {
    document.querySelector('.modal').classList.remove('modal--open')
});

window.onclick = function (event) {
    if (event.target == document.querySelector('.modal')) {
        document.querySelector('.modal').classList.remove('modal--open')
    }
}
/**
 *******************************************************************************
 * aктивные ссылки
 */
 document.querySelectorAll('.header__nav ul li a').forEach(function (el) {
    if (window.location.pathname.indexOf(el.getAttribute('href')) > -1) {
        el.parentNode.classList.add('active');
    }
});

/**
 *******************************************************************************
 * скролл экрана
 */
 if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
 } else if (document.querySelector("section.first-screen")) {
    let n_height = window.innerHeight - document.querySelector('.header').offsetHeight - +document.querySelector('.header').style.paddingTop.slice(0, -2) * 2,
    last_scroll_top = 0;

    document.addEventListener('scroll', add_scroll);

    function add_scroll(event) {
        let st = window.pageYOffset || document.documentElement.scrollTop;

        if ($('body').is('.disabled')) {
            event.preventDefault();
        } else {
            let scroll = document.documentElement.scrollTop;

            if (last_scroll_top === 0 && st > last_scroll_top && scroll < n_height) {
                document.querySelector('body').classList.add('disabled');

                $('body, html').animate({scrollTop: n_height}, 600, function () {
                    document.querySelector('body').classList.remove('disabled');
                });
            }
        }

        last_scroll_top = st;
    }
}

/******************************************************************************/

window.onload = function () {
    let phone_input = document.getElementById('phone_input');

    if (phone_input) {
        phone_input.addEventListener("keydown", update_phone_number);
        phone_input.addEventListener("keyup", update_phone_number);
        phone_input.addEventListener("click", update_phone_number);

        function update_phone_number() {
            let phone = document.getElementById("phone_input"),
            tmp_phone_number = "";

            if (phone.value.substr(0, 4) !== '+7 (') {
                phone.value = '+7 (';
                return false;
            }

            let x = phone.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);

            tmp_phone_number += '+7 (';
            tmp_phone_number += x[2] + (x[3] ? ') ' : '');
            tmp_phone_number += x[3] + (x[4] ? '-' : '');
            tmp_phone_number += x[4] + (x[5] ? '-' : '');
            tmp_phone_number += x[5];

            phone.value = tmp_phone_number;
        }
    }

    new WOW({}).init();
    $(".fancybox").fancybox();

    ymaps.ready(init);
};


/******************************************************************************/

function init() {
    var myMap = new ymaps.Map("map", {
        center: [55.74979531474713, 37.53689675203345],
        zoom: 15
    }, {
        searchControlProvider: 'yandex#search'
    }),

        // Создаем геообъект с типом геометрии "Точка".
        myGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [55.749632568990755, 37.53743349999997]
            },
            properties: {
                iconContent: 'Башня Федерация Восток',
                hintContent: 'Пресненская набережная 12, Башня Федерация Восток, этаж 42, офис 4204'
            }
        }, {
            preset: 'islands#blackStretchyIcon',
            draggable: true
        });

        myMap.geoObjects
        .add(myGeoObject)
        .add(myPieChart);
    }

    $(document).ready(function () {
        let list = $(".work__list .work__item");
        let numToShow = 7;
        let button = $("#loadmore");
        let numInList = list.length;
        list.hide();
        if (numInList > numToShow) {
            button.show();
        }
        list.slice(0, numToShow).show();
        button.click(function () {
            let showing = list.filter(':visible').length;
            list.slice(showing - 1, showing + numToShow).fadeIn().addClass('fadeInUp xxx');
            let nowShowing = list.filter(':visible').length;
            if (nowShowing >= numInList) {
                button.hide();
            }
            console.log('xxx')
        });

    //Validation
    function validateForm(params) {
      // Объявляем переменные (форма и кнопка отправки)
      let form = $(params),
      checkbox = form.find('input[type="checkbox"]'),
      btn = form.find('button[type="submit"]'); 

      // Прверка активности чекбокса

      checkbox.on('change', function() {
        if ($(this).is(':checked')) {
            $(this).addClass('checked');
        } else {
            $(this).removeClass('checked');            
        }
    });       

      // Добавляем каждому проверяемому полю, указание что поле пустое
      form.find('.form__control').addClass('empty-field');
      form.find('.textarea').removeClass('empty-field');

      // Функция проверки полей формы
      function checkInput(){
        form.find('.form__control').each(function(){
            if($(this).val() != '' && $(this).val().indexOf('_') == -1) {
                // Если поле не пустое удаляем класс-указание
                $(this).removeClass('empty-field');
            } else {
                // Если поле пустое добавляем класс-указание
                $(this).addClass('empty-field');
                form.find('.textarea').removeClass('empty-field');
            }
        });
    }    

      // Функция подсветки незаполненных полей
      function lightEmpty(){
        form.find('.empty-field').addClass('error');
    }

    form.find('.empty-field').on('change', function(){
        if ($(this).val() != '' && $(this).val().indexOf('_') == -1) {
            $(this).removeClass('empty-field').removeClass('error');
        }
    });


      // Проверка в режиме реального времени
      setInterval(function(){
          // Запускаем функцию проверки полей на заполненность
          checkInput();
          // Считаем к-во незаполненных полей
          var sizeEmpty = form.find('.empty-field').length;
          // Вешаем условие-тригер на кнопку отправки формы
          if(sizeEmpty > 0) {
            if(btn.hasClass('disabled')){
                return false
            } else {
                btn.addClass('disabled')
            }
        } else {
            btn.removeClass('disabled')
        }

    }, 1500);

      // Событие клика по кнопке отправить
      btn.click(function(){
        if($(this).hasClass('disabled')) {
            // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
            lightEmpty();
            return false;       
        } else if (!($(this).parent().parent().parent().find('input[type="checkbox"]').hasClass('checked'))) {
            return false;
        } else {
            // Все хорошо, все заполнено, отправляем форму           
            form.submit();
        }
    });
  };

  validateForm('#contactsForm');
  validateForm('#jobsForm');    
});
