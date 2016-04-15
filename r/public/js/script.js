
(function($){
    //搜索
    $('.search > .icon-search').click(function(){
        $('.search_popup').slideDown('', function() {});
        $('.search > .icon-search').toggleClass('active');
        $('.search > .icon-remove').toggleClass('active');
     });

     $('.search > .icon-remove').click(function(){
        $('.search_popup').slideUp('', function() {});
        $('.search > .icon-search').toggleClass('active');
        $('.search > .icon-remove').toggleClass('active');
     });

    //移动设备菜单
     $('.menubutton').click(function(){
        $('header nav').slideToggle('', function() {});
     });
})(jQuery);