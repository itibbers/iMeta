$({property: 0}).animate({property: 100}, {
   /* duration: 6000,*/ /*测试时间*/
    step: function(){
        var percentage = Math.round(this.property);
        $('#progress').css('width',  percentage+"%");
        if(percentage == 100) {
			$("#progress").addClass("done");//完成，隐藏进度条
		}
    }
});