const $cabinetNavItem = $("#cabinetNavItem")
const $cabinetPane = $("#cabinetPane")
const $catalogNavItem = $("#catalogNavItem")
const $catalogPane = $("#catalogPane")
const $hamburger = $("#hamburger")
const $nav = $(".godere-nav")
const $filters = $('.godere-filters')
let left = 0

$cabinetNavItem.click(
  () => {
    $cabinetNavItem
      .addClass('godere-nav__item_cabinet')
      .removeClass('godere-nav__item_login')
      .find('.godere-nav__user').html('Сергей')

    left = $cabinetNavItem.position().left
  }
)

$cabinetNavItem.hover(
  () => {
    if ($cabinetNavItem.hasClass('godere-nav__item_cabinet')) {
      $cabinetPane.css({ left }).addClass('godere-nav__pane_active')
    }
  },
  () => { $cabinetPane.removeClass('godere-nav__pane_active') }
);

$cabinetPane.hover(
  () => { $cabinetPane.addClass('godere-nav__pane_active') },
  () => { $cabinetPane.removeClass('godere-nav__pane_active') }
);

$catalogNavItem.hover(
  () => { $catalogPane.addClass('godere-nav__pane_active') },
  () => { $catalogPane.removeClass('godere-nav__pane_active') }
);

$catalogPane.hover(
  () => { $catalogPane.addClass('godere-nav__pane_active') },
  () => { $catalogPane.removeClass('godere-nav__pane_active') }
);

$hamburger.click(
  () => {
    $hamburger.toggleClass('godere-header__hamburger_active')
    $nav.toggleClass('godere-nav_active')
    $filters.removeClass('godere-filters_active')
    $('body').toggleClass('freeze')
  }
)
