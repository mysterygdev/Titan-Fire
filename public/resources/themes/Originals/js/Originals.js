// Popovers
$(function () {
    $('[data-toggle="popover"]').popover()
  })

  $('[data-toggle=popover]').popover({
    html: true,
    content: function () {
        return $('#content').html();
    }
}).click(function (e) {
    $('[data-toggle=popover]').not(this).popover('hide');
});

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var cookie = document.cookie;
    var prefix = name + "=";
    var begin = cookie.indexOf("; " + prefix);
    if (begin == -1) {
        begin = cookie.indexOf(prefix);
        if (begin != 0) return null;
    } else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = cookie.length;
        }
    }
    return unescape(cookie.substring(begin + prefix.length, end));
}

function deleteCookie(name) {
    var d = new Date();
    d.setTime(d.getTime() - (24*60*60*1000));
    var expires = "expires="+d.toUTCString();
	document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

/* Avatar Upload */
function getFile() {
    document.getElementById("upfile").click();
}
/* Show File name */
var input = document.getElementById('upfile');
var infoArea = document.getElementById('file-upload-filename');

if (input) {
	input.addEventListener('change', showFileName);
}

function showFileName(event) {

    var input = event.srcElement;

    var fileName = input.files[0].name;

    infoArea.textContent = 'File name: ' + fileName;
}

/* $(document).ready(function () {
	$(document).on('click', '.open_register_form_modal', function (e) {
		e.preventDefault();
		$('#register_form_modal #dynamic-content').html('');
		$('#register_form_modal #modal-loader').show();
		$.ajax({
				url: "../../../../../assets/includes/Addons/jQuery/AJAX/Site/Authentication/Register/Register.form.php",
				type: 'POST',
				data: $('form#register').serialize(),
				dataType: 'html'
			})
			.done(function (data) {
				$('#register_form_modal #dynamic-content').html('');
				$('#register_form_modal #dynamic-content').html(data);
				$('#register_form_modal #modal-loader').hide();
			})
			.fail(function () {
				$('#register_form_modal #dynamic-content').html('<i class="fa fa-exclamation-triangle"></i> Something went wrong, Please try again...');
				$('#register_form_modal #modal-loader').hide();
			});
	});
	$(document).on('click', '.open_login_form_modal', function (e) {
		e.preventDefault();
		$('#login_form_modal #dynamic-content').html('');
		$('#login_form_modal #modal-loader').show();
		$.ajax({
				url: "../../../../../assets/includes/Addons/jQuery/AJAX/Site/Authentication/Login/Login.form.php",
				type: 'POST',
				data: $('form#login').serialize(),
				dataType: 'html',
			})
			.done(function (data) {
				$('#login_form_modal #dynamic-content').html('');
				$('#login_form_modal #dynamic-content').html(data);
				$('#login_form_modal #modal-loader').hide();
			})
			.fail(function () {
				$('#login_form_modal #dynamic-content').html('<i class="fa fa-exclamation-triangle"></i> Something went wrong, Please try again...');
				$('#login_form_modal #modal-loader').hide();
			});
	});
	$(document).on('click', '.logout_form', function (e) {
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: "POST",
			url: "../../../../../assets/includes/Addons/jQuery/AJAX/Site/Authentication/Logout/Logout.php",
			data: "id=" + id,
			dataType: "html",
			success: function () {
				location.reload();
			}
		})
	});
	$(document).on('click', '.open_login_acp_form_modal', function (e) {
		e.preventDefault();
		$('#login_acp_form_modal #dynamic-content').html('');
		$('#login_acp_form_modal #modal-loader').show();
		$.ajax({
				url: "../../../../../assets/includes/Addons/jQuery/AJAX/ACP/Authentication/Login/Login.form.php",
				type: 'POST',
				data: $('form#login').serialize(),
				dataType: 'html',
			})
			.done(function (data) {
				$('#login_acp_form_modal #dynamic-content').html('');
				$('#login_acp_form_modal #dynamic-content').html(data);
				$('#login_acp_form_modal #modal-loader').hide();
			})
			.fail(function () {
				$('#login_acp_form_modal #dynamic-content').html('<i class="fa fa-exclamation-triangle"></i> Something went wrong, Please try again...');
				$('#login_acp_form_modal #modal-loader').hide();
			});
	});
	$(document).on('click', '.logout_acp_form', function (e) {
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: "POST",
			url: "../../../../../assets/includes/Addons/jQuery/AJAX/ACP/Authentication/Logout/Logout.php",
			data: "id=" + id,
			dataType: "html",
			success: function () {
				location.reload();
			}
		})
	}); */
});
