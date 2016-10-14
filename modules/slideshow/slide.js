// JavaScript Document
 $(document).ready(function(e) {
	 var stt = 0;
	 startImg = parseInt($("img:first").attr("stt"));
	 endImg = parseInt($("img:last").attr("stt"));
		
	$("img").each(function(e) {
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
				$("img").hide();				
				$("img").eq(next).show();
				$("li").removeClass('active');
				$("li").eq(next).addClass('active');
			});
	
			$("#prev").click(function(){
				if(stt == 0){
					stt = (endImg + 1);
				}
				prev = --stt;
				
				$("img").hide();				
				$("img").eq(prev).show();
				$("li").removeClass('active');
				$("li").eq(prev).addClass('active');
			});
			
			// Hàm tự động chạy next sau 1s			
			setInterval(function(){
				$("#next").click();
				}, 3000);
			  
     });