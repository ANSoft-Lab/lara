const headerCall = document.querySelectorAll('.callback');
const modalCallback = document.querySelector('.modal_callback');
const modalCallbackClose = document.querySelector('.modal_callback .modal__btn-close');

headerCall.forEach(item => {
    item.addEventListener('click', () => {
        modalCallback.style.display = 'flex';
    });
});

modalCallbackClose.addEventListener('click', () => {
    modalCallback.style.display = 'none';
});

const servicesLink = document.querySelectorAll('.service__link');
const serviceItem = document.querySelectorAll('.service__item');

servicesLink.forEach((link, i) => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        hideTabs();
        showTab(i, link);
    });
});

function hideTabs() {
    serviceItem.forEach((item, i) => {
        item.style.display = 'none';
        servicesLink[i].classList.remove('service__link_active');
    });
}

function showTab(i, link) {
    serviceItem[i].style.display = 'flex';
    serviceItem[i].style.flexDirection = 'column';
    link.classList.add('service__link_active');
    if (i === 1) {
        $('.service__item_box-1 .service__slider').slick('setPosition');
    } else if (i === 3) {
        $('.service__item_box-3 .service__slider').slick('setPosition');
    }
}

const serviceInputs = document.querySelectorAll('.service__box');

serviceInputs.forEach(input => {
    input.querySelector('.service__btn_plus').addEventListener('click', () => {
        const sum = input.querySelector('.service__input div');

        sum.textContent = (parseInt(sum.textContent.replace(/\s/g, '')) + 1000).toLocaleString();
    });

    input.querySelector('.service__btn_minus').addEventListener('click', () => {
        const sum = input.querySelector('.service__input div');

        if (parseInt(sum.textContent.replace(/\s/g, '')) > 0) {
            sum.textContent = (parseInt(sum.textContent.replace(/\s/g, '')) - 1000).toLocaleString();
        }
    });
});

const serviceInner = document.querySelectorAll('.service__inner');

serviceInner.forEach(inner => {
    inner.querySelector('.service__price span').textContent = (parseInt(inner.querySelector('.service__input div').textContent.replace(/\s/g, '')) / 100 * parseFloat(inner.dataset.sum)).toLocaleString();

    inner.addEventListener('click', (event) => {
        if (event.target.classList.contains('service__sum') || event.target.parentNode.classList.contains('service__box')) {
            inner.querySelector('.service__price span').textContent = (parseInt(inner.querySelector('.service__input div').textContent.replace(/\s/g, '')) / 100 * parseFloat(inner.dataset.sum)).toLocaleString();
        }
    });

    inner.addEventListener('keyup', (event) => {
        inner.querySelector('.service__price span').textContent = (parseInt(inner.querySelector('.service__input div').textContent.replace(/\s/g, '')) / 100 * parseFloat(inner.dataset.sum)).toLocaleString();
    });
});

$('.service__item_box-1 .service__slider').slick({
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: $('.service__item_box-1 .service__slider-btn_prev'),
    nextArrow: $('.service__item_box-1 .service__slider-btn_next'),
    responsive: [{
        breakpoint: 1469,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
    }
    ]
});

$('.service__item_box-3 .service__slider').slick({
    infinite: false,
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: $('.service__item_box-3 .service__slider-btn_prev'),
    nextArrow: $('.service__item_box-3 .service__slider-btn_next'),
    responsive: [{
        breakpoint: 1469,
        settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
    }
    ]
});

$('.service__item_box-4 .service__slider').slick({
    infinite: false,
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: $('.service__item_box-4 .service__slider-btn_prev'),
    nextArrow: $('.service__item_box-4 .service__slider-btn_next'),
    responsive: [{
        breakpoint: 1469,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
    }
    ]
});

const select = document.querySelector('.service__top-select');
const selectList = document.querySelector('.service__top-wrap');

select.addEventListener('click', () => {
    selectList.classList.toggle('service__top-wrap_active');
});

servicesLink.forEach(item => {
    item.addEventListener('click', () => {
        document.querySelector('.service__top-wrap').classList.remove('service__top-wrap_active');
        document.querySelector('.service__top-select').textContent = item.textContent;
    });
});

const serviceRadio = document.querySelectorAll('.service__radio a');

let osago = false;

document.querySelector('.service__radio-link_left').addEventListener('click', () => {
    document.querySelector('.service__item_box-3 .service__input div').textContent = '60 000';
    document.querySelector('.service__item_box-3 .service__caption span').textContent = '10';
});

document.querySelector('.service__radio-link_right').addEventListener('click', () => {
    document.querySelector('.service__item_box-3 .service__input div').textContent = '15 000';
    document.querySelector('.service__item_box-3 .service__caption span').textContent = '14';
});

serviceRadio.forEach(radio => {
    radio.addEventListener('click', (event) => {
        event.preventDefault();
        if (!radio.classList.contains('service__radio-link_active')) {
            hideRadioClass();
            radio.classList.add('service__radio-link_active');
            osago = !osago;
            if (osago) {
                document.querySelector('.service__item_box-3 .service__inner').dataset.sum = '14';
            } else {
                document.querySelector('.service__item_box-3 .service__inner').dataset.sum = '10';
            }
            document.querySelector('.service__item_box-3 .service__inner').querySelector('.service__price span').textContent = (parseInt(document.querySelector('.service__item_box-3 .service__inner').querySelector('.service__input div').textContent.replace(/\s/g, '')) / 100 * parseFloat(document.querySelector('.service__item_box-3 .service__inner').dataset.sum)).toLocaleString();
        }
    });
});

function hideRadioClass() {
    serviceRadio.forEach(item => {
        item.classList.remove('service__radio-link_active');
    });
}

const exampleLink = document.querySelectorAll('.payment__link');
const calc = document.getElementById('calc');

exampleLink.forEach(item => {
    item.addEventListener('click', (event) => {
        event.preventDefault();
        hideTabs();
        showTab(item.dataset.id, servicesLink[item.dataset.id]);
        document.querySelector('.service__top-select').textContent = item.dataset.name;
        $('.service__item_box-' + item.dataset.id + ' .service__slider').slick('setPosition');
        calc.scrollIntoView();
    });
});

const menuBtn = document.querySelector('.header__sandwich');
const menu = document.querySelector('.menu');

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('menu_active');
    menuBtn.classList.toggle('header__sandwich_active');
    document.body.classList.toggle('scroll');
});

document.querySelector('.footer__bottom-link').addEventListener('click', (event) => {
    window.scrollTo(0, 0);
});

const subMenuLink = document.querySelectorAll('.menu__item');
subMenuLink.forEach(link => {
    link.addEventListener('click', (event) => {
      if (event.target.classList.contains('menu__item') || event.target.classList.contains('menu__link'))
        link.classList.toggle('menu__item_active');
    })
})

const paymentsItems = document.querySelectorAll('.payment__item');

document.addEventListener('scroll', () => {
    if (window.pageYOffset >= 1500) {
        paymentsItems[0].classList.remove('payment__item_active'); paymentsItems[1].classList.add('payment__item_active')
    }
    if (window.pageYOffset >= 1900) {
        paymentsItems[1].classList.remove('payment__item_active'); paymentsItems[2].classList.add('payment__item_active')
    }
    if (window.pageYOffset >= 2300) {
        paymentsItems[2].classList.remove('payment__item_active'); paymentsItems[3].classList.add('payment__item_active')
    }

    if (window.pageYOffset <= 1500) {
        paymentsItems[1].classList.remove('payment__item_active'); paymentsItems[0].classList.add('payment__item_active')
    }
    if (window.pageYOffset <= 1900 && window.pageYOffset > 1500) {
        paymentsItems[2].classList.remove('payment__item_active'); paymentsItems[1].classList.add('payment__item_active')
    }
    if (window.pageYOffset <= 2300 && window.pageYOffset > 1900) {
        paymentsItems[3].classList.remove('payment__item_active'); paymentsItems[2].classList.add('payment__item_active')
    }
});

document.querySelector('.menu__subitem-link_item-1').addEventListener('click', (event) => {
  event.preventDefault();
  document.querySelector('.menu__subitem-link_item-1 + .menu__box').classList.toggle('menu__box_active');
  document.querySelector('.menu__subitem-link_item-1').classList.toggle('menu__subitem-link_item-1_active');
});