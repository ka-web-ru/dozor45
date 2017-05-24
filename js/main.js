var revId = 1;
var galId = 1;
$(document).ready(function(){
	$("header .menu").on("click","a", function (event)
	{
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top - 100;
		$('body,html').animate({scrollTop: top}, 600);
	});
	$('.inp input[type="text"]').click(function() {$(this).removeClass('error');});
	$('textarea').click(function() {$(this).removeClass('error');});
	$("#closeC" ).click(function()
	{
		$("#hover").fadeOut();
		$("#recall").slideUp();
	});
	$( "#bnCall" ).click(function()
	{
		$("#hover").fadeIn();
		$("#recall").slideDown();
	});
	$("#closeR" ).click(function()
	{
		$("#hover").fadeOut();
		$("#addReview").slideUp();
	});
	$( "#bnReview" ).click(function()
	{
		$("#hover").fadeIn();
		$("#addReview").slideDown();
	});
	
	$("#reviews .left").hide();
	var revCount = $("#reviews .cont > div").length;
	if(revCount <= 1)
		$("#reviews .right").hide();
	
	$("#reviews .left").click(function()
	{
		$("#reviews .cont > div").fadeOut();
		--revId;
		if(revId <= 1)
		{
			$("#reviews .left").hide();
			revId = 1;
		}
		if(revId < revCount)
			$("#reviews .right").show();
		$("#reviews .cont > div[data-num='" + revId + "']").fadeIn();
	});
	$("#reviews .right").click(function()
	{
		$("#reviews .cont > div").fadeOut();
		++revId;
		if(revId >= revCount)
		{
			$("#reviews .right").hide();
			revId = revCount;
		}
		if(revId > 1)
			$("#reviews .left").show();
		$("#reviews .cont > div[data-num='" + revId + "']").fadeIn();
	});
	
	$("#gallery .left").hide();
	var iCount = parseInt(($(".galI").length - 1)/9) + 1;
	if(iCount <= 1)
		$("#gallery .right").hide();
	$("#gallery .left").click(function()
	{
		$("#gallery .gals > div").hide();
		--galId;
		if(galId <= 1)
		{
			$("#gallery .left").hide();
			galId = 1;
		}
		if(galId < iCount)
			$("#gallery .right").show();
		$("#gallery .gals > div[data-num='" + galId + "']").show();
	});
	$("#gallery .right").click(function()
	{
		$("#gallery .gals > div").hide();
		++galId;
		if(galId >= iCount)
		{
			$("#gallery .right").hide();
			galId = iCount;
		}
		if(galId > 1)
			$("#gallery .left").show();
		$("#gallery .gals > div[data-num='" + galId + "']").show();
	});
	
});

var main =
{
	isSend: 0,
	SendSale: function(el, num, lit)
	{
		if(main.isSend)
			return;
		main.isSend = 1;
		var xName = '#' + lit + 'Name';
		var xPhone = '#' + lit + 'Phone';
		var name = $(xName).val().trim();
		var phone = $(xPhone).val().trim();
		var isSc = 1;
		if(name == '')
		{
			$(xName).addClass("error");
			isSc = 0;
		}
		if(phone == '')
		{
			$(xPhone).addClass("error");
			isSc = 0;
		}
		if(isSc)
		{
			$(el).addClass("pick");
			$(el).html("Подождите...");
			$.ajax({
					type:"POST",
					cache: false,
					url: "mail.php",
					data: {name: name, phone: phone, num: num},
					lit: lit,
					success: function(res)
					{
						main.isSend = 0;
						$("#" + lit + "Out").html(res);
					},
					error: function(res)
					{
						main.isSend = 0;
						$("#" + lit + "Out").html(res);
					},
				});
		}
		else
			main.isSend = 0;
	},
	SendReview: function(el)
	{
		if(main.isSend)
			return;
		main.isSend = 1;
		var name = $("#rName").val().trim();
		var com = $("#rCom").val().trim();
		var isSc = 1;
		if(name == '')
		{
			$("#rName").addClass("error");
			isSc = 0;
		}
		if(com == '')
		{
			$("#rCom").addClass("error");
			isSc = 0;
		}
		if(isSc)
		{
			$(el).addClass("pick");
			$(el).html("Подождите...");
			$.ajax({
					type:"POST",
					cache: false,
					url: "review.php",
					data: {name: name, com: com},
					success: function(res)
					{
						main.isSend = 0;
						$("#rOut").html(res);
					},
					error: function(res)
					{
						main.isSend = 0;
						$("#rOut").html(res);
					},
				});
		}
		else
			main.isSend = 0;
	}
}