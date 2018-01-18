$(function () {
    var lefts;
    var tops;
    
    $('body').on('touchstart',function (e) {
        var dangqian=e.target;
        console.log(dangqian)
        // if()
    })
    
    
    
    // $('.tiezhi').on('touchstart',function (e) {
    //     var dangqian=e.target.parentNode;
    //     console.log(e.offsetX,e.offsetY)
    //     $('.tiezhi').on('touchmove',function () {
    //         lefts=e.originalEvent.targetTouches[0].pageX;
    //         tops=e.originalEvent.targetTouches[0].pageY;
    //
    //         lefts=lefts*2/100;
    //         tops=tops*2/100;
    //         lefts=lefts+'rem';
    //         tops=tops+'rem';
    //
    //
    //         console.log(lefts,tops)
    //         $('.tiezhi').on('touchend',function () {
    //             $('.tiezhi').css({'left':lefts,'top':tops})
    //         })
    //
    //
    //     })
        // console.log(e.originalEvent.targetTouches[0].pageX)
        // console.log(e.originalEvent.targetTouches[0].pageY)
    // })

})