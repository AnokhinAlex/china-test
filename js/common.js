$(document).ready(function () {
    anhorsPosition();
    if ($('.slider').length) {
        $('.slider').slick({});
    }
    if ($('.slider-product').length) {
        $('.slider-product').slick({
            slidesToShow: 1
            , slidesToScroll: 1
            , arrows: true
            , fade: true
            , asNavFor: '.slider-product-nav'
        });
        $('.slider-product-nav').slick({
            slidesToShow: 3
            , slidesToScroll: 1
            , asNavFor: '.slider-product'
            , dots: false
            , focusOnSelect: true
            , responsive: [{
                breakpoint: 991
                , settings: {
                    slidesToShow: 2
                    , slidesToScroll: 2
                }
            }]
        });
    };
    var zoomMap
    if ($(window).width() > 1366) {
        zoomMap = 2
    }
    else {
        zoomMap = 2
    }
    if ($('#map').length) {
        $(function () {
            var marker_path = "/wp-content/themes/KO-Chinese/images/Pin-green.png"
                , marker_link = "/wp-content/themes/KO-Chinese/images/Pin.png"
                , pos = new google.maps.LatLng(39.440303, 40.536411)
                , map = new google.maps.Map(document.getElementById('map'), {
                    zoom: zoomMap
                    , center: pos
                    , disableDefaultUI: true
                    , mapTypeId: google.maps.MapTypeId.ROADMAP
                    , scrollwheel: false
                    , styles: [{
                        "featureType": "all"
                        , "elementType": "geometry.fill"
                        , "stylers": [{
                            "weight": "2.00"
                        }]
                    }, {
                        "featureType": "all"
                        , "elementType": "geometry.stroke"
                        , "stylers": [{
                            "color": "#9c9c9c"
                        }]
                    }, {
                        "featureType": "all"
                        , "elementType": "labels.text"
                        , "stylers": [{
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "landscape"
                        , "elementType": "all"
                        , "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    }, {
                        "featureType": "landscape"
                        , "elementType": "geometry.fill"
                        , "stylers": [{
                            "color": "#ffffff"
                        }]
                    }, {
                        "featureType": "landscape.man_made"
                        , "elementType": "geometry.fill"
                        , "stylers": [{
                            "color": "#ffffff"
                        }]
                    }, {
                        "featureType": "poi"
                        , "elementType": "all"
                        , "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "road"
                        , "elementType": "all"
                        , "stylers": [{
                            "saturation": -100
                        }, {
                            "lightness": 45
                        }]
                    }, {
                        "featureType": "road"
                        , "elementType": "geometry.fill"
                        , "stylers": [{
                            "color": "#eeeeee"
                        }]
                    }, {
                        "featureType": "road"
                        , "elementType": "labels.text.fill"
                        , "stylers": [{
                            "color": "#7b7b7b"
                        }]
                    }, {
                        "featureType": "road"
                        , "elementType": "labels.text.stroke"
                        , "stylers": [{
                            "color": "#ffffff"
                        }]
                    }, {
                        "featureType": "road.highway"
                        , "elementType": "all"
                        , "stylers": [{
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "road.arterial"
                        , "elementType": "labels.icon"
                        , "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "transit"
                        , "elementType": "all"
                        , "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "water"
                        , "elementType": "all"
                        , "stylers": [{
                            "color": "#46bcec"
                        }, {
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "water"
                        , "elementType": "geometry.fill"
                        , "stylers": [{
                            "color": "#545454"
                        }]
                    }, {
                        "featureType": "water"
                        , "elementType": "labels.text.fill"
                        , "stylers": [{
                            "color": "#070707"
                        }]
                    }, {
                        "featureType": "water"
                        , "elementType": "labels.text.stroke"
                        , "stylers": [{
                            "color": "#ffffff"
                        }]
                    }]
                })
                , markers = [];
            $('.gps-coordinates p').each(function () {
                var coords = $(this).find('b').html().split(',')
                    , x = +coords[0]
                    , y = +coords[1]
                    , obj = {
                        position: new google.maps.LatLng(x, y)
                        , map: map
                    }
                    , info = $(this).find('span').html();
                info.indexOf('http') > -1 ? (obj.url = info, obj.title = undefined, obj.icon = marker_link) : (obj.title = info, obj.url = '#', obj.icon = marker_path);
                obj.title ? attachSecretMessage(obj, obj.title) : addGoToLink(obj, obj.url);
                markers.push(obj);
            });

            function attachSecretMessage(marker, secretMessage) {
                var marker = new google.maps.Marker(marker);
                var infowindow = new google.maps.InfoWindow({
                    content: secretMessage
                });
                google.maps.event.addListener(marker, 'mouseover', function () {
                    infowindow.open(marker.get('map'), marker);
                });
                google.maps.event.addListener(marker, 'mouseout', function () {
                    infowindow.close(marker.get('map'), marker);
                });
            }

            function addGoToLink(el, secretMessage) {
                var marker = new google.maps.Marker(el)
                    , infowindow = new google.maps.InfoWindow({
                        content: secretMessage
                    });
                google.maps.event.addListener(marker, 'mouseover', function () {
                    infowindow.open(marker.get('map'), marker);
                });
                google.maps.event.addListener(marker, 'mouseout', function () {
                    infowindow.close(marker.get('map'), marker);
                });
                google.maps.event.addListener(marker, 'click', function (e) {
                    if (this.url !== '#') {
                        window.open(this.url, '_blank');
                    }
                });
            }
        });
    };
    $('body').on('click', '.request-sample', function () {
        $('body').toggleClass('modal-open');
        $('.right-popup').toggleClass('open');
    });
    $('body').on('click', '.right-popup .icon-close-button', function () {
        $('body').removeClass('modal-open');
        $('.right-popup').removeClass('open');
    });
    if ($('.sitebar').length) {
        $('body').on('click', '.sitebar a', function () {
            var scrollHref = $(this).attr('href')
                , $root = $('body,html');
            $root.animate({
                scrollTop: $(scrollHref).offset().top - 50
            }, 500);
            window.location.hash = scrollHref.substr(1); return false;
        });
        var anhors = $('h3.title');
        $(window).scroll(function () {
            $('.sitebar li').removeClass('active');
            anhors.each(function (i, el) {
                var link = $('[href = \"#' + $(el).attr('id') + '\"]').closest('li');
                if ($(window).scrollTop() >= ($(el).offset().top - $(window).height() / 3) && $(window).scrollTop() <= ($(el).offset().top + $(el).height() + $(window).height() / 3)) {
                    link.addClass('active');
                }
            });
        });
    };
});
if ($('.top-sales').length) {
    $('.top-sales .items.mobile-visible').slick({
        dots: true
        , infinite: false
        , speed: 300
        , slidesToShow: 1
        , slidesToScroll: 1
    });
};
if ($('.burger-menu').length) {
    $('.burger-menu').click(function () {
        $(this).toggleClass('close');
        $('body').toggleClass('modal-open');
    });
    $('.cat ul a').click(function () {
        $('.burger-menu').toggleClass('close');
        $('body').toggleClass('modal-open');
    });
}
if ($('.slider-card').length) {
    setTimeout(function () {
        $(".slick-active a").elevateZoom({
            zoomWindowWidth: 900,
            zoomWindowHeight:600,
            responsive:true
        });
    }, 100);
    $('.slider-card').on('click', function () {
        setTimeout(function () {
            $(".slick-active a").elevateZoom({
                zoomWindowWidth: 900,
                zoomWindowHeight:600,
                responsive:true
            });
        }, 100);
    });
} /* window scroll show/hide anhor #scrollTop*/
$(window).scroll(function () {
    anhorsPosition();
}); /* anhors position*/
function anhorsPosition() {
    if ($(window).scrollTop() + $(window).height() > $('.footer').offset().top) {
        $('.sitebar').length && $('.sitebar').addClass('absolute');
    }
    else if ($(window).scrollTop() + $(window).height() < $('.footer').offset().top) {
        $('.sitebar').length && $('.sitebar').removeClass('absolute');
    }
}
$(document).on("scroll", function () {
    if ($(document).scrollTop() > 230) {
        $(".sitebar").addClass("fixed");
    }
    else {
        $(".sitebar").removeClass("fixed");
    }
});