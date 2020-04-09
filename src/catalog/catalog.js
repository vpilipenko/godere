import noUiSlider from 'nouislider'

var priceSlider = document.getElementById('priceSlider');

noUiSlider.create(priceSlider, {
  start: [0, 5000],
  connect: true,
  step: 1,
  range: {
    'min': 0,
    'max': 10000
  }
});

var priceMin = document.getElementById('priceMin');
var priceMax = document.getElementById('priceMax');

priceSlider.noUiSlider.on('update', function (values, handle) {

  var value = values[handle];

  if (handle) {
    priceMax.value = Math.floor(value);
  } else {
    priceMin.value = Math.floor(value);
  }
});

priceMin.addEventListener('change', function () {
  priceSlider.noUiSlider.set([this.value, null]);
});

priceMax.addEventListener('change', function () {
  priceSlider.noUiSlider.set([null, this.value]);
});