
function debounce(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this, args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

$('.prlx').each(function () {
    var $obj = $(this);
    $obj.css('background-position', '50% 0');
    $obj.css('background-attachment', 'fixed');
    $obj.css('translate(0px, -170px);')
    if ($(window).width() > 940) {
        $obj.css('background-size', '100%');
        $(window).scroll(function () {
            var offset = $obj.offset();
            var yPos = -($(window).scrollTop() - offset.top) / 10;
            var bgpos = '50% ' + yPos + 'px';
            $obj.css('background-position', bgpos);
        });
    }
});

$('nav a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 100
    }, 900);
});


//   ANIMAR PELO SCROLL
function animeScroll() {

    var $target = $('.anime');
    var animationClass = 'anime-start';
    var offset = $(window).height() * 3 / 4;
    // Calcular distancia entre o top da pagina e o scroll 
    var documentTop = $(document).scrollTop();
    $target.each(function () {
        var itemTop = $(this).offset().top;
        if (documentTop >= itemTop - offset) {

            $(this).addClass(animationClass);
        } else {
            $(this).removeClass(animationClass);
        }
    });
}

//   ANIMAR PELO SCROLL
function animeScrollTopDown() {

    var $target = $('.animeTop');
    var animationClass = 'anime-start';
    var offset = $(window).height() * 3 / 4;
    // Calcular distancia entre o top da pagina e o scroll 
    var documentTop = $(document).scrollTop();
    $target.each(function () {
        var itemTop = $(this).offset().top;
        if (documentTop >= itemTop - offset) {

            $(this).addClass(animationClass);
        } else {
            $(this).removeClass(animationClass);
        }
    });
}


// Menu Sanduiche 
function menuSanduiche() {
    var status = document.getElementById('control-nav').checked;
    var headerTag = document.querySelector('.header');
    var menu = document.getElementById('menuStatus');
    if (status === true) {
        headerTag.style.position = "fixed";
        console.log(menu.classList);
        $('#menuStatus').addClass('close');
        $('#menuStatus').removeClass('control-nav');

    }
    else {
        headerTag.style.position = "relative";
        $('#menuStatus').addClass('control-nav');
        $('#menuStatus').removeClass('close');

    }

}

function bgHeader() {
    var $target = $('.not-bg');
    var animationBg = 'bg-header';


    var documentTop = $(document).scrollTop();
    $target.each(function () {
        if (documentTop > 100) {
            $(this).addClass(animationBg);
        }
        else {
            $(this).removeClass(animationBg);
        }
    });
}

$(document).scroll(function () {
    animeScroll();
    animeScrollTopDown();
    bgHeader();
});





// // <!-- Smooth Scrol -->	 
// $(function () {

//     var $window = $(window);		//Window object

//     var scrollTime = 0.6;			//Scroll time
//     var scrollDistance = 355;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

//     $window.on("mousewheel DOMMouseScroll", function (event) {
//         passive:false;
//         event.preventDefault();

//         var delta = event.originalEvent.wheelDelta / 125 || -event.originalEvent.detail / 3;
//         var scrollTop = $window.scrollTop();
//         var finalScroll = scrollTop - parseInt(delta * scrollDistance);

//         TweenMax.to($window, scrollTime, {
//             scrollTo: { y: finalScroll, autoKill: true },
//             ease: Power1.easeOut,
//             autoKill: true,
//             overwrite: 5
//         });

//     });

// });
