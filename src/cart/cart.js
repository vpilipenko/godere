const $closeButtons = $('.godere-cart__close')

$closeButtons.click(function () {
  $(this).closest('.godere-cart__item').remove()
})
