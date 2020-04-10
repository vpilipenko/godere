const $tabs = $('.godere-tabs__item')


$tabs.click(function (e) {
  e.preventDefault()
  $tabs.removeClass('godere-tabs__item_active')
  $(this).addClass('godere-tabs__item_active')
})
