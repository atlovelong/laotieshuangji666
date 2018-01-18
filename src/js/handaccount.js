$(function () {
    var lefts;
    var tops;
    var dangqian;
    var images;
    var classname;
    $('body').bind('touchstart',function (e) {
        e.preventDefault();
        dangqian=e.target;
        images=dangqian.parentNode;
        classname=images.className;
        console.log(classname)
        if(classname==='tiezhi'){
            $('body').bind('touchmove',function (even) {
                even.preventDefault();
                console.log(even.originalEvent.targetTouches[0].pageX);
            })
        }

    })

    $('body').bind('touchend',function (even) {
        even.preventDefault();
        $('body').unbind('touchmove');
        console.log(1);
    })


})