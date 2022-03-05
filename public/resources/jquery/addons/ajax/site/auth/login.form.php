<form class="contact-form login">
    <center>
        <table>
            <tr>
                <td><input class="form-control" name="UserName" placeholder="Username or Email" type="text"/></td>
            </tr>
            <tr>
                <td><input style="margin-top: 10px;" class="form-control" name="Password" placeholder="Password" type="password"/></td>
            </tr>
        </table>
    </center>
    <input type="hidden" name="doLogin" value="true"/>
    <p class="text-center"><button type="button" class="btn btn-sm btn-dark" id="login" name="doLogin" style="width: 70%; margin-top: 20px;">Authenticate</button></p>
</form>
<script>
	$(document).ready(function(){
		$("button#login").click(function(){
			$.ajax({
				type: "POST",
				url: "/auth/login",
				data: $('form.login').serialize(),
				success: function(message){
					$('#login_form_modal #dynamic-content').html(message);
				},
				error: function(){
					alert("Error");
				}
			});
		});
		$("form.login").keypress(function(e) {
            if (e.which == 13) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/auth/login",
                    data: $('form.login').serialize(),
                    success: function(message){
                        $('#login_form_modal #dynamic-content').html(message);
                    },
                    error: function(){
                        alert("Error");
                    }
                });
            }
        });
	});
</script>
