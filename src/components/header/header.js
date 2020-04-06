const $cabinetNavItem = $("#cabinetNavItem")
const $cabinetPane = $("#cabinetPane")
const $catalogNavItem = $("#catalogNavItem")
const $catalogPane = $("#catalogPane")
const left = $cabinetNavItem.position().left

$cabinetNavItem.hover(
  () => {
    $cabinetPane.css({ left }).addClass('active')
  },
  () => { $cabinetPane.removeClass('active') }
);

$cabinetPane.hover(
  () => { $cabinetPane.addClass('active') },
  () => { $cabinetPane.removeClass('active') }
);

$catalogNavItem.hover(
  () => { $catalogPane.addClass('active') },
  () => { $catalogPane.removeClass('active') }
);

$catalogPane.hover(
  () => { $catalogPane.addClass('active') },
  () => { $catalogPane.removeClass('active') }
);
