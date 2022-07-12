import Vue from 'vue'
import vClickOutside from 'v-click-outside'
require('./bootstrap');
window.$ = window.jQuery = require('jquery');

import Cookies from 'js-cookie';
import Glide from '@glidejs/glide';
import Swiper from 'swiper/bundle';
import Inputmask from "inputmask";
import HypothecInsurance from "./views/hypothec-insurance";

class Finist {
    constructor() {

        // Кнопка "Наверх"

        this.scrollTop = document.querySelector('.js-scroll-top');
        this.scrollTop.addEventListener('click', this.goUp.bind(this));

        this.help = $('#map-help');

        // Мобильное меню

        this.burger = document.querySelector('.js-burger');
        this.mobileMenu = document.querySelector('.js-mobile-menu');

        if(this.burger) {
            this.burger.addEventListener('click', this.toggleMenu.bind(this));
        }

        // Десктопное меню

        this.dropdownList = document.querySelectorAll('.js-dropdown-list');
        this.dropdownMenuItem = document.querySelectorAll('.js-dropdown-item');
        // this.dropdownMenuItem = document.querySelectorAll('.qna__list-item');

        // Слайдер с картами

        if ($('.glide').length) {
            new Glide('.glide').mount();
        }

        if (document.querySelector('.js-show-section')) {
            this.hiddenSections = document.querySelectorAll('.js-hidden-section');
            this.showSectionsBtn = document.querySelector('.js-show-section');

            this.showSectionsBtn.addEventListener('click', this.showSections.bind(this));
        }

        this.cityModal = document.querySelector('#choose-city');

        var th = this;

        //  Выбор города
        $(document).on('click', '.js-open-modal', th.openModal.bind(th));
        $(document).on('click', '.js-modal-close', th.closeModal.bind(th));
        $(document).on('click', '.js_set_city', th.setCity.bind(th));
        $(document).on('click', '.js_send', th.sendForm.bind(th));
        $('.js-overlay').on('click', function (e) {
            if ($(e.target).closest('.modal').length < 1) {
                th.closeModal();
            }
        });

        this.city = 'moscow';

        if (Cookies.get('city')) {
            this.city = Cookies.get('city');
        } else {
            //$('.header__location:first-child').click();
        }

        if (th.city && this.cityModal) {
            $(th.cityModal).find('[name=city]').each(function () {
                $(this).prop('checked', false);

                if ($(this).val() == th.city) {
                    $(this).prop('checked', true);
                }
            });
        }

        this.showCity();

        this.closeBtn = document.querySelectorAll('.js-contacts-close');

        for (let i = 0; i < th.closeBtn.length; ++i) {
            let btn = th.closeBtn[i];

            btn.addEventListener('click', function () {
                btn.closest('.js-contacts-block').addClass('m-hidden');
            });
        }

        for (let i = 0; i < th.dropdownList.length; ++i) {
            let item = th.dropdownList[i];

            item.addEventListener('click', function (evt) {
                item.classList.toggle('m-visible');
                item.closest('.js-list-item').classList.toggle('m-visible');
            });
        }

        for (let i = 0; i < th.dropdownMenuItem.length; ++i) {
            let item = th.dropdownMenuItem[i];
            item.addEventListener('click', this.showDropdown.bind(this));
        }
    }

    openModal(e) {
        var btn = $(e.target).closest('.js-open-modal'),
            modal = $('#' + btn.attr('data-modal'));

        modal.removeClass('m-hidden');

        return false;
    }

    sendRequest(form) {
        var serializedForm = form.serializeArray();
        var formData = new FormData();

        $(serializedForm).each(function(index, obj) {
            let objValue = obj.value;
            if(obj.name === 'phone') {
                objValue = objValue.replace(/_/g, '');
            }

            formData.append(obj.name, objValue);
        });

        var fileFields = $(form).find('input[type=file]');

        if(fileFields) {
            fileFields.each(function() {
                const fileField = $(this);
                if(fileField[0].files.length) {
                    formData.append(fileField.attr('name'), fileField[0].files[0]);
                }
            });
        }

        var url = form.attr('action');

        if(url) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'POST',
                url: url,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    window.ajaxFormSending = true;
                },
                success: function (result) {
                    window.ajaxFormSending = false;
                    var errorsArea = form.find('.errors-area');
                    errorsArea.html(result);
                    window.ajaxFormSended = false;

                    if(result.errors) {
                        $.each(result.errors, function (key, value) {
                            let newError = $('<div class="error-text mt-3">' + value + '</div>');

                            errorsArea.append(newError);
                        });
                    } else if(result.message) {
                        $(form.closest('.form-area')).html(result.message);
                        window.ajaxFormSended = true;
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    window.ajaxFormSending = false;
                    if( jqXHR.status === 422 ) {
                        var errorsObj = $.parseJSON(jqXHR.responseText),
                            errorsArea = form.find('.errors-area');

                        $.each(errorsObj.errors, function (key, value) {
                            let newError = $('<div class="error-text mt-3">' + value + '</div>');

                            errorsArea.append(newError);
                        });
                    } else {
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }

                    window.ajaxFormSended = false;
                }
            });
        }
    }

    sendForm(e) {
        var form = $(e.target).closest('form');

        if(form) {
            form.find('.errors-area').html('');
            this.sendRequest(form);
        }

        return false;
    }

    closeModal() {
        $('.js-overlay').addClass('m-hidden');
    }

    setCity(evt) {
        var form = $(evt.target).closest('form');

        this.city = form.find('[name=city]:checked').val();
        Cookies.set('city', this.city);

        this.showCity();
        this.closeModal();

        // Меняем город в фильтре вакансий и коллектива
        if($('.js-filter-item').length) {
            const cityName = form.find('[name=city]:checked').next('label').text();

            if(cityName && $('.sale__filter-item[data-type=city]')) {
                $('.sale__filter-item[data-type=city]').each(function() {

                    if($(this).attr('data-city-name') && $(this).attr('data-city-name').toLowerCase() == cityName.toLowerCase()) {
                        $(this).click();
                        return false;
                    }
                });
            }
            
        }

        return false;
    }

    showCity() {
        $('.js-city-show').addClass('hidden');

        $('.js-city-show.city_' + this.city).removeClass('hidden');
    }

    goUp() {
        window.scrollTo({top: 0, behavior: 'smooth'});
    }

    showSections() {
        this.showSectionsBtn.classList.add('m-hidden');
        this.hiddenSections.forEach((section) => {
            section.classList.remove('m-hidden');
        })
    }

    toggleMenu() {
        this.burger.classList.toggle('m-cross');
        this.mobileMenu.classList.toggle('m-hidden');
        this.mobileMenu.classList.toggle('mobile-hidden');
        if($(this.burger).hasClass('m-cross')) {
            $('main').css('padding-top', $(this.mobileMenu).height() - 45);
        } else {
            $('main').css('padding-top', 0);
        }
    }

    showDropdown(evt) {
        evt.preventDefault();
        let clicked = evt.target;

        this.dropdownMenuItem.forEach((item) =>  {
            if (item != clicked) {
                item.classList.remove('m-visible');
                item.closest('.header-menu__item').classList.remove('m-active');
                item.nextElementSibling.classList.add('m-hidden');
            }
        })

        clicked.classList.toggle('m-visible');
        clicked.closest('.header-menu__item').classList.toggle('m-active');
        clicked.nextElementSibling.classList.toggle('m-hidden');
    }

}
new Finist();

$(document).ready(function(){
    $('.ins__faq__item').on('click', e=>{
        e.stopPropagation();

        const t = $(e.currentTarget);

        $('.ins__faq__item').not(t).removeClass('active').find('.ins__faq__content').slideUp(500);

        const isOpened = t.hasClass('active');

        if(!isOpened){
            t.addClass('active').find('.ins__faq__content').slideDown(500);
        }
        else {
            t.removeClass('active').find('.ins__faq__content').slideUp(500);
        }

    });

   $('#ins_btn').click(function() {
       if($('input[name=ins]').filter(':checked').val() != undefined) {
        window.location.href = $('input[name=ins]').filter(':checked').val();
       }
   });

   var im = new Inputmask("+7 (999) 999-99-99", {autoclear: false});
    im.mask($("input[name=phone]"));

   var swiper = new Swiper(".partners__list", {
        loop: true,
        speed: 3000,
        slidesPerView: 2,
        waitForTransition: false,
        autoplay: {
            enabled: true,
            delay: 1,
        },
        breakpoints: {
          768: {
            slidesPerView: 3
          },
          992: {
            slidesPerView: 4
          },
          1200: {
            slidesPerView: 6
          },
        },
  });

    $('.js-mobile-show-button').click(function() {
        if ($(window).width() < 1199) {
            var elClass = $(this).attr('data-show');

            $('.' + elClass).toggleClass('mobile-hidden');

            return false;
        }
    });
});

Vue.use(vClickOutside)

if (document.getElementById('hypothec-insurance')) {
    const hypothecInsureanceInstance = new Vue({
        render: h => h(HypothecInsurance)
    }).$mount('#hypothec-insurance')
}
