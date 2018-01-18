$(function () {
    var lefts;
    var tops;
    var dangqian;
    var images;
    var classname;
    var lefts;
    var tops;
    var width;
    var height;
    $('body').bind('touchstart',function (e) {
        e.preventDefault();
        dangqian=e.target;
        images=dangqian.parentNode;
        classname=images.className;
        console.log(classname)
        if(classname==='tiezhi'){
            $(images).addClass('yidong-tiezhi');
            console.log()
            $('body').bind('touchmove',function (even) {
                even.preventDefault();
                width=$('.tiezhi').css('width');
                height=$('.tiezhi').css('height');
                var w=width.slice(0,-2);
                var h=height.slice(0,-2);
                h=h/100;
                w=w/100;
                console.log(width.slice(0,-2))
                lefts=even.originalEvent.targetTouches[0].pageX*2/100-w+'rem';
                tops=even.originalEvent.targetTouches[0].pageY*2/100-h+'rem';
                $('.yidong-tiezhi').css({'left':lefts,'top':tops})
                // console.log(even.originalEvent.targetTouches[0].pageX);
                // console.log(even.originalEvent.targetTouches[0].pageY);

            })
        }

    })

    $('body').bind('touchend',function (even) {
        even.preventDefault();
        $('.tiezhi').removeClass('yidong-tiezhi');
        $('body').unbind('touchmove');
        var htmlshangchuan=$('body').html();
    })


})