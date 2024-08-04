$(document).ready(function () {
    $(".client-carousel").owlCarousel({
        items: 1,
        margin: 30,
        stagePadding: 30,
    });

    // $(".benefit-carousel").owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     nav: true,
    //     responsive: {
    //         0: {
    //             items: 2,
    //         },
    //         600: {
    //             items: 5,
    //         },
    //         1000: {
    //             items: 8,
    //         },
    //     },
    // });

    $(".package-carousel").owlCarousel({
        stagePadding: 50,
        // loop: true,
        // center: true,
        // items: 3, // Jumlah item yang ditampilkan sekaligus
        // margin: 10, // Jarak antara item
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    $(".class-carousel").owlCarousel({
        items: 4,
        // nav: true,
        // dots: true,
        // navClass: ["custom-nav-prev", "custom-nav-next"], // Custom navigation classes
        // dotsClass: "custom-dots", // Custom dots class
        // video: true,
        // lazyLoad: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });
});
