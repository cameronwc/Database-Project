
$(document).ready(function () {
    // fix menu when passed
    $('.masthead')
        .visibility({
            once: false,
            onBottomPassed: function () {
                $('.fixed.menu').transition('fade in');
            },
            onBottomPassedReverse: function () {
                $('.fixed.menu').transition('fade out');
            }
        });

    // create sidebar and attach to menu open
    $('.ui.sidebar').sidebar('attach events', '.toc.item');
});

$('.rating').rating({
    initialRating: 2,
    maxRating: 5
});

function openForm() {
    $("#primaryBox").hide();
    $("#rateForm").show();
}

$('.ui.search')
  .search({
    apiSettings: {
      url: '/Database/php/universitySearch.php?name={query}'
    }
  })
;