
require('./bootstrap');
window.$ = window.jQuery = require('jquery');

import Cookies from 'js-cookie';
import Glide from '@glidejs/glide';

class Finist {
    constructor() {

        // Кнопка "Наверх"

        this.scrollTop = document.querySelector('.js-scroll-top');
        this.scrollTop.addEventListener('click', this.goUp.bind(this));

        // Мобильное меню

        this.burger = document.querySelector('.js-burger');
        this.mobileMenu = document.querySelector('.js-mobile-menu');
        this.burger.addEventListener('click', this.toggleMenu.bind(this));

        // Десктопное меню

        this.dropdownList = document.querySelectorAll('.js-dropdown-list');
        this.dropdownMenuItem = document.querySelectorAll('.js-dropdown-item');

        // Слайдер с картами

        if($('.glide').length) {
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
        $('.js-overlay').on('click', function(e) {
            if($(e.target).closest('.modal').length < 1) {
                th.closeModal();
            }
        });

        this.city = 'moscow';

        if(Cookies.get('city')) {
            this.city = Cookies.get('city');
        } else {
            $('.header__location__city-option').click();
        }

        if(th.city && this.cityModal) {
            $(th.cityModal).find('[name=city]').each(function() {
                $(this).prop('checked', false);

                if($(this).val() == th.city) {
                    $(this).prop('checked', true);
                }
            });
        }

        this.showCity();

        this.closeBtn = document.querySelectorAll('.js-contacts-close');

        for(let i = 0; i < th.closeBtn.length; ++i) {
            let btn = th.closeBtn[i];

            btn.addEventListener('click', function () {
                btn.closest('.js-contacts-block').addClass('m-hidden');
            });
        }

        for(let i = 0; i < th.dropdownList.length; ++i) {
            let item = th.dropdownList[i];

            item.addEventListener('click', function (evt) {
                item.classList.toggle('m-visible');
                item.closest('.js-list-item').classList.toggle('m-visible');
            });
        }

        for(let i = 0; i < th.dropdownMenuItem.length; ++i) {
            let item = th.dropdownMenuItem[i];
            item.addEventListener('click', this.showDropdown.bind(this));
        }

        // this.dropdownMenuItem.forEach((item) => {
        //     item.addEventListener('click', function (evt) {
        //         evt.preventDefault();
        //         item.classList.toggle('m-visible');
        //         item.closest('.header-menu__item').classList.toggle('m-active');
        //         item.nextElementSibling.classList.toggle('m-hidden');
        //     });
        // });
    }

    openModal(e) {
        var btn = $(e.target).closest('.js-open-modal'),
            modal = $('#' + btn.attr('data-modal'));

        modal.removeClass('m-hidden');

        return false;
    }

    sendRequest(form) {
        var formData = form.serialize(),
            url = form.attr('action');

        if(url) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                type: 'POST',
                url: url,
                data: formData,
                beforeSend: function() {
                    console.log('before');
                },
                success: function (result) {
                    var errorsArea = form.find('.errors-area');
                    errorsArea.html(result);

                    if(result.errors) {
                        $.each(result.errors, function (key, value) {
                            let newError = $('<div class="error-text mt-3">' + value + '</div>');
            
                            errorsArea.append(newError);
                        });
                    } else if(result.message) {
                        $(form.closest('.form-area')).html(result.message);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
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
