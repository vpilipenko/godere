const $cabinetNavItem = $("#cabinetNavItem")
const $cabinetPane = $("#cabinetPane")
const $catalogNavItem = $("#catalogNavItem")
const $catalogPane = $("#catalogPane")
const left = $cabinetNavItem.position().left
const $hamburger = $("#hamburger")

console.log('header.js');

$cabinetNavItem.hover(
  () => {
    $cabinetPane.css({ left }).addClass('godere-nav__pane_active')
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
  () => { $hamburger.toggleClass('godere-header__hamburger_active') }
)
