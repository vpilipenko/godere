import Swiper from 'swiper'

new Swiper('.swiper-container', {
  loop: true,
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})

const $button = $('.godere-page__button')
const $preview = $('.godere-preview')
const $close = $('.godere-preview__close')

$button.click((e) => {
  e.preventDefault()

  $preview.addClass('godere-preview_active')
})

$close.click((e) => {
  e.preventDefault()

  $preview.removeClass('godere-preview_active')
})