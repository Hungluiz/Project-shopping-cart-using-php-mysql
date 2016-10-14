
// JavaScript Document
/*------- function click login------------*/
$(document).ready(function(e) {
	 $(".lab_login").click(function(e){
		$(".login").show();
	});	
	 
});


/*--------------------------- function slideshow --------------------------------*/
 $(document).ready(function(e) {
	 var stt = 0;
	 startImg = parseInt($(".slideshow img:first").attr("stt"));
	 endImg = parseInt($(".slideshow img:last").attr("stt"));
		
	$(".slideshow img").each(function(e) {
		if($(this).is(':visible')){
			// nếu nó đang hiển thị
				stt = parseInt($(this).attr("stt"));		
		}
    });	
          	$("#next").click(function(e){			
				next = ++stt;
				if(next == endImg){
					stt = (startImg - 1);
				}				
				$(".slideshow img").hide();				
				$(".slideshow img").eq(next).show();
				$(".slideshow>ul>li").removeClass('active');
				$(".slideshow>ul>li").eq(next).addClass('active');
			});
	
			$("#prev").click(function(){
				if(stt == 0){
					stt = (endImg + 1);
				}
				prev = --stt;
				
				$(".slideshow img").hide();				
				$(".slideshow img").eq(prev).show();
				$(".slideshow>ul>li").removeClass('active');
				$(".slideshow>ul>li").eq(prev).addClass('active');
			});
			
			// Hàm tự động chạy next sau 1s			
			setInterval(function(){
				$("#next").click();
				}, 3000);
			  
     });
	 
	 /*------ plugin facebook --------*/
	 
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

/*-------- jquery ajax xử lý xự kiện form_login ---------*/
