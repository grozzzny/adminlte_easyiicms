$(document).on('ready', function(){
    console.log('ok');
    if ($('.redactor_toolbar').length) {
        var sticky = new Waypoint.Sticky({
            element: $('.redactor_toolbar'),
        });
    }
});