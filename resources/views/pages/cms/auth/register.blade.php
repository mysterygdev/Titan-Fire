@extends('layouts.cms.app')
@section('index', 'register')
@section('title', 'Register')
@section('zone', 'CMS')
@section('content')
  @include('partials.cms.nav')

    <div class="youplay-banner banner-top youplay-banner-parallax full">
      <div class="image" style="background-image: url('/resources/themes/YouPlay/images/banners/4.jpeg')"></div>

      <div class="info">
        <div>
          <div class="container align-center">
            <h1>Register</h1>
            @auth
              <h4>You are already logged in!</h4>
            @else
              <div class="youplay-login">
                <div class="youplay-form text-center">
                  <h2 class="mt-0">Register</h2>
                  <p id="responseReg"></p>
                  <form class="register_form" method="post">
                    <div class="youplay-input">
                      <input type="text" name="displayname" id="displayname" placeholder="Displayname">
                    </div>
                    <div class="youplay-input">
                      <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="youplay-input">
                      <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="youplay-input">
                      <input type="password" name="password2" id="password2" placeholder="Confirm password">
                    </div>
                    <div class="youplay-input">
                      <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="youplay-input">
                      {!!security_question()!!}
                    </div>
                    <div class="youplay-input">
                      <input type="text" name="SecAnswer" id="Input-SecAnswer" placeholder="Security answer">
                    </div>
                    <input name="terms" id="terms" type="radio"/> I Agree to the <strong>{{APP['title']}}</strong> <a href="/help/terms" target="_blank">Terms Of Use</a>
                    @Separator(20)
                    <button class="btn btn-default db" id="register" name="sub_reg">Register</button>
                  </form>
                </div>
              </div>
            @endauth
          </div>
        </div>
      </div>
    </div>
    @include('layouts.cms.footer')
    @include('layouts.cms.scripts')
    <script>
    document.body.addEventListener("click", e => {
      if(e.target.closest("#register")) {
        e.preventDefault();

        const display =  document.querySelector('input[name="displayname"]').value;
        const user =  document.querySelector('input[name="username"]').value;
        const email =  document.querySelector('input[name="email"]').value;
        const pw =  document.querySelector('input[name="password"]').value;
        const pw2 =  document.querySelector('input[name="password2"]').value;
        const sQuestion =  document.querySelector('select[name="SecQuestion"]').value;
        const sAnswer =  document.querySelector('input[name="SecAnswer"]').value;
        let terms;
        if (document.querySelector('#terms').checked) {
          terms = document.querySelector('input[name=terms]:checked').value;
        } else {
          terms = 'off';
        }

        const response =  document.querySelector('#responseReg');

        fetch('/auth/register', {
          method: 'post',
          mode: "same-origin",
          credentials: "same-origin",
          headers: {
              "Content-Type": "application/json"
          },
          body: JSON.stringify({
              display,
              user,
              email,
              pw,
              pw2,
              sQuestion,
              sAnswer,
              terms
          })
        })
        .then(r => r.text())
        .then(data => {
          // Initialize the DOM parser
          var parser = new DOMParser();

          // Parse the text
          var doc = parser.parseFromString(data, "text/html");

          // You can now even select part of that html as you would in the regular DOM
          // Example:
          // var docArticle = doc.querySelector('article').innerHTML;

          //console.log(doc.documentElement);
          response.innerHTML = doc.documentElement.innerHTML;
        })
      }
    });
  </script>
@endsection
