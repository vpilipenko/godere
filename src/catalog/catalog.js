import noUiSlider from 'nouislider'

const slider = document.getElementById('priceSlider');


if (slider && slider.length) {

  noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    range: {
      'min': 0,
      'max': 100
    }
  });
}