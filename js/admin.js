$(document).ready(function()
{
	$("#error .fa-times").click(function() {$("#error").fadeOut(200); $("#error > div").html('');});
	$(".revStatus").click(function()
	{
		var status = 0;
		var id = $(this.parentNode).attr('data-id');
		if($(this).hasClass('yes'))
		{
			$(this).removeClass('yes');
			$(this).addClass('no');
			$(this).html('Скрыт');
		}
		else
		{
			$(this).removeClass('no');
			$(this).addClass('yes');
			$(this).html('Показан на сайте');
			status = 1;
		}
		admin.ReviewStatus(this, id, status);
	});
	$(".remove-review").click(function(){
		var id = $(this.parentNode).attr('data-id');
		//console.log(id);
		admin.RemoveReview(this, id);
	});
}
);
	
var admin =
{
	Error: function(desc)
	{
		$("#error").fadeIn(200);
		$("#error > div").html(desc);
	},
	SaveSettings: function()
	{
		var title = $("#iTitle").val();
		var keys = $("#iKeys").val();
		var desc = $("#iDesc").val();
		$.ajax(
		{
			type:"POST", cache: false, url: "/admin/post.php",
			data: {type: 'settings', title: title, keys: keys, desc: desc},
			success: function(res)
			{
				if(res.r)
				{
					if(res.r == 'f')
						admin.Error(res.error);
					else
						location.reload();
				}
				else
					admin.Error(res);
			},
			error: function(res)
			{
				admin.Error(res.responseText);
			}
		});
	},
	SaveReview: function()
	{
		var name = $("#iName").val();
		//var date = $("#iDate").val();
		//var sort = $("#iSort").val();
		var text = $("#iText").val();
		$.ajax(
		{
			type:"POST", cache: false, url: "/admin/post.php",
			//data: {type: 'add_review', name: name, date: date, sort: sort, text: text},
			data: {type: 'add_review', name: name, text: text},
			success: function(res)
			{
				if(res.r)
				{
					if(res.r == 'f')
						admin.Error(res.error);
					else
						location.reload();
				}
				else
					admin.Error(res);
			},
			error: function(res)
			{
				admin.Error(res.responseText);
			}
		});
	},
	ReviewStatus: function(el, id, status)
	{
		$.ajax(
		{
			type:"POST", cache: false, url: "/admin/post.php",
			data: {type: 'review_status', id: id, status: status},
			data_status: status,
			el: el,
			success: function(res)
			{
				if(res.r)
				{
					if(res.r == 'f')
						admin.Error(res.error);
					else
					{
						if(this.data_status)
						{
							$(this.el).removeClass('no');
							$(this.el).addClass('yes');
							$(this.el).html('Показан на сайте');
						}
						else
						{
							$(this.el).removeClass('yes');
							$(this.el).addClass('no');
							$(this.el).html('Скрыт');
						}
					}
				}
				else
					admin.Error(res);
			},
			error: function(res)
			{
				admin.Error(res.responseText);
			}
		});
	},
	RemoveReview: function(el, id)
	{
		if (confirm("Вы действительно хотите удалить отзыв?"))
			$.ajax(
			{
				type:"POST", cache: false, url: "/admin/post.php",
				data: {type: 'review_delete', id: id},
				el: el,
				success: function(res)
				{
					if(res.r)
					{
						if(res.r == 'f')
							admin.Error(res.error);
						else
							//this.el.parentNode.parentNode.parentNode.removeChild(this.el.parentNode.parentNode);
							this.el.parentNode.parentNode.removeChild(this.el.parentNode);
					}
					else
						admin.Error(res);
				},
				error: function(res)
				{
					admin.Error(res.responseText);
				}
			});
	},
	DeleteImage: function(el, id)
	{
		if (confirm("Вы действительно хотите удалить изображение?"))
			$.ajax(
			{
				type:"POST", cache: false, url: "/admin/post.php",
				data: {type: 'image_delete', id: id},
				el: el,
				success: function(res)
				{
					if(res.r)
					{
						if(res.r == 'f')
							admin.Error(res.error);
						else
							this.el.parentNode.parentNode.parentNode.removeChild(this.el.parentNode.parentNode);
					}
					else
						admin.Error(res);
				},
				error: function(res)
				{
					admin.Error(res.responseText);
				}
			});
	},
	Login: function()
	{
		var login = $("#iName").val();
		var pass = $("#iPass").val();
		$.ajax(
		{
			type:"POST", cache: false, url: "/admin/post.php",
			data: {type: 'login', login: login, pass: pass},
			success: function(res)
			{
				if(res.r)
				{
					if(res.r == 'f')
						admin.Error(res.error);
					else
						location.reload();
				}
				else
					admin.Error(res);
			},
			error: function(res)
			{
				admin.Error(res.responseText);
			}
		});
	},
	Logout: function()
	{
		$.ajax(
		{
			type:"POST", cache: false, url: "/admin/post.php",
			data: {type: 'logout'},
			success: function(res)
			{
				if(res.r)
				{
					if(res.r == 'f')
						admin.Error(res.error);
					else
						location.reload();
				}
				else
					admin.Error(res);
			},
			error: function(res)
			{
				admin.Error(res.responseText);
			}
		});
	},
	UploadImage: function(el)
	{
		var file = el.files[0];
		var name = file.name;
    var size = file.size;
    var type = file.type;
		if(file.name.length < 1)
		{
    }
    else if(file.size > 10000000)
		{
       admin.Error("The file is too big");
    }
    else if(file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/gif' && file.type != 'image/jpeg' )
		{
      admin.Error("The file does not match png, jpg or gif");
		}
		else
		{
			$('#load').button('loading');
			
			var formData = new FormData();
			formData.append('type', 'upload');
			formData.append('image', el.files[0]); 
			$.ajax({
					url: '/admin/post.php',
					type: 'POST',
					xhr: function()
					{
						myXhr = $.ajaxSettings.xhr();
						if(myXhr.upload)
						{
							
						}
						return myXhr;
					},
					// Ajax events
					success: completeHandler = function(data)
					{
						$('#load').button('reset');
						location.reload();
					},
					error: errorHandler = function(res)
					{
						$('#load').button('reset');
						admin.Error("Something went wrong!");
					},
					data: formData,
					cache: false,
					contentType: false,
					processData: false
			}, 'json');
		}
	},
	UpdateAccaunt: function()
	{
		var login = $("#iLog").val();
		var pass = $("#iPass").val();
		$.ajax(
			{
				type:"POST", cache: false, url: "/admin/post.php",
				data: {type: 'accaunt', login: login, pass: pass},
				success: function(res)
				{
					if(res.r)
					{
						if(res.r == 'f')
							admin.Error(res.error);
						else
							location.reload();
					}
					else
						admin.Error(res);
				},
				error: function(res)
				{
					admin.Error(res.responseText);
				}
			});
	},
	UpdateContacts: function()
	{
		var address = $("#iAddress").val();
		var phonecode = $("#iPhoneCode").val();
		var phone1 = $("#iPhone1").val();
		var phone2 = $("#iPhone2").val();
		var phone3 = $("#iPhone3").val();
		var mail = $("#iMail").val();
		var vk = $("#iVK").val();
		$.ajax(
			{
				type:"POST", cache: false, url: "/admin/post.php",
				data: {type: 'contacts', address: address, phonecode: phonecode, phone1: phone1, phone2: phone2, phone3: phone3, mail: mail, vk: vk,},
				success: function(res)
				{
					if(res.r)
					{
						if(res.r == 'f')
							admin.Error(res.error);
						else
							location.reload();
					}
					else
						admin.Error(res);
				},
				error: function(res)
				{
					admin.Error(res.responseText);
				}
			});
	}


}