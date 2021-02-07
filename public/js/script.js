$(document).ready(function () {
      for (var i = 0; i < food_types_count; i++) {
        $('#food-' + i).lightSlider({
            autoWidth: true,
            loop: true,
            onSliderLoad: function () {
            },
            responsive: [{
                    breakpoint: 800,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        item: 2,
                        slideMove: 1
                    }
                }
            ],
        });
        console.log(i);
         $('#food-' + i).removeClass('cs-hidden');
      };
});



// $(document).ready(function () {
//     $('#food-1').lightSlider({
//         autoWidth: true,
//         loop: true,
//         onSliderLoad: function () {
//             $('#food-1').removeClass('cs-hidden');
//         }
//     });
// });
