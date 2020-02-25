jQuery(document).ready(function() {
    jQuery('.aboutProduct').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 300
    });

    jQuery('.dignityAndPluses').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated wobble',
        offset: 300
    });

    jQuery('.screenshots').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 300
    });

    jQuery('.reviewUnit').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 300
    });

    jQuery('.buyUnit').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 300
    });

    jQuery('footer').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated slideInUp',
        offset: 300
    });
});