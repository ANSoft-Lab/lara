require('./bootstrap');
window.$ = window.jQuery = require('jquery');

import Glide from '@glidejs/glide'

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

        this.dropdownList = [...document.querySelectorAll('.js-dropdown-list')];
        this.dropdownMenuItem = [...document.querySelectorAll('.js-dropdown-item')];

        // Слайдер с картами

        if($('.glide').length) {
            new Glide('.glide').mount();
        }

        if (document.querySelector('.js-show-section')) {
            this.hiddenSections = [...document.querySelectorAll('.js-hidden-section')];
            this.showSectionsBtn = document.querySelector('.js-show-section');

            this.showSectionsBtn.addEventListener('click', this.showSections.bind(this));
        }

        var th = this;

        this.city = 'moscow';
        this.showCity();

        //  Выбор города
        $(document).on('click', '.js-choose-city', th.openModal.bind(th));
        $(document).on('click', '.js-modal-close', th.closeModal.bind(th));
        $(document).on('click', '.js_set_city', th.setCity.bind(th));

        this.cityModalBtn = document.querySelector('.js-choose-city');
        this.cityModal = document.querySelector('.js-overlay');
        //this.cityModalBtn.addEventListener('click', this.openModal.bind(this));

        this.closeBtn = [...document.querySelectorAll('.js-contacts-close')];

        this.closeBtn.forEach((btn) => {
            btn.addEventListener('click', function (evt) {
                btn.closest('.js-contacts-block').classList.add('m-hidden');
            });
        });

        this.dropdownList.forEach((item) => {
            item.addEventListener('click', function (evt) {
                item.classList.toggle('m-visible');
                item.closest('.js-list-item').classList.toggle('m-visible');
            });
        });

        this.dropdownMenuItem.forEach((item) => item.addEventListener('click', this.showDropdown.bind(this)));

        // this.dropdownMenuItem.forEach((item) => {
        //     item.addEventListener('click', function (evt) {
        //         evt.preventDefault();
        //         item.classList.toggle('m-visible');
        //         item.closest('.header-menu__item').classList.toggle('m-active');
        //         item.nextElementSibling.classList.toggle('m-hidden');
        //     });
        // });
    }

    openModal() {
        this.cityModal.classList.remove('m-hidden');

        return false;
    }

    closeModal() {
        this.cityModal.classList.add('m-hidden');
    }

    setCity(evt) {
        var form = $(evt.target.closest('form'));

        this.city = form.find('[name=city]:checked').val();

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
