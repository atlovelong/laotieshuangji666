(function (doc, win) {
<<<<<<< HEAD
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if(clientWidth>=750){
                  // 这里的640 取决于设计稿的宽度
                    docEl.style.fontSize = '100px';
                }else{
                    docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
                }     
            };

        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
       recalc();
    })(document, window);
=======
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            if(clientWidth>=750){
                // 这里的640 取决于设计稿的宽度
                docEl.style.fontSize = '100px';
            }else{
                docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
            }
        };
    
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    recalc();
})(document, window);
>>>>>>> f32b1b269d7c50130e8e28ba5c940208ceda8ae7


