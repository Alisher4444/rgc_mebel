var tabNavs = document.querySelectorAll(".nav-tab");
var tabPanes = document.querySelectorAll(".tab-pane");
var first = document.querySelector(".first");
var second = document.querySelector(".second");
let tabContent = document.getElementById("tab-content");

function clickFirstTab() {
    tabContent.style.background = 'url("/img/tabs/tabs-bg.png") center right no-repeat';
    tabContent.style.backgroundSize = "83% 100%";
}

function clickSecondTab() {
    tabContent.style.background = 'url("/img/tabs/tabs-bg2.png") center no-repeat';
    tabContent.style.backgroundSize = "100% 100%";
}

first.addEventListener('click', clickFirstTab);
second.addEventListener('click', clickSecondTab);




$(document).ready(function() {
    $('.slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});
$(document).ready(function() {
    // $('.services-slider').slick({
    //      infinite: true,
    //      slidesToShow: 1,
    //      slidesToScroll: 1,
    //      arrows: true,
    //      autoplay: false,
    //      autoplaySpeed: 4000,
    //      responsive: [
    //           {
    //               breakpoint: 992,
    //               settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //               }
    //             },
    //           {
    //               breakpoint: 768,
    //               settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //               }
    //             }
    //      ]
    // });

});




for (var i = 0; i < tabNavs.length; i++) {

    tabNavs[i].addEventListener("click", function(e) {
        e.preventDefault();
        var activeTabAttr = e.target.getAttribute("data-tab");

        for (var j = 0; j < tabNavs.length; j++) {
            var contentAttr = tabPanes[j].getAttribute("data-tab-content");

            if (activeTabAttr === contentAttr) {
                tabNavs[j].classList.add("active");
                tabPanes[j].classList.add("active");
            } else {
                tabNavs[j].classList.remove("active");
                tabPanes[j].classList.remove("active");
            }
        };
    });
}

$(document).ready(function() {
    $(".product__button").on("click", function() {
        $(".product-overlay").show()
    });
    $(".popup-close").on("click", function() {
        $(".product-overlay").hide()
    })
});

$(document).ready(function() {
    $(".services-item").on("click", function() {
        $(".overlay").show()
    });
    $(".popup-close").on("click", function() {
        $(".overlay").hide()
    })
});

$(document).ready(function() {
    $(".services-item").on("click", function() {
        $("body").addClass('lock');
    });
});
$(document).ready(function() {
    $(".popup-close").on("click", function() {
        $("body").removeClass('lock');
    });
});