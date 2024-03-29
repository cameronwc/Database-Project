
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

$('#initialRating')
.rating({
  initialRating: 2,
  maxRating: 4
})
;

function openForm() {
    $("#primaryBox").hide();
    $("#rateForm").show();
}

$('.ui.search')
  .search({
    apiSettings: {
      url: '/~group5/php/universitySearch.php?name={query}'
    }
  })
;