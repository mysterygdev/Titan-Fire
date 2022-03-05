@extends('layouts.cms.app')
@section('index', 'shareDp')
@section('title', 'share DP')
@section('zone', 'CMS')
@section('content')
  @include('partials.cms.nav')

  <section class="content-wrap">
    <div class="youplay-banner banner-top youplay-banner-parallax small">
      <div class="image" style="background-image: url('/resources/themes/YouPlay/images/template/banner-blog-bg.jpg')"></div>
    </div>

    <div class="container youplay-content text-center">
        <h2 class="mt-0">Share Dp</h2>
        @guest
          <p>Please login to continue.</p>
        @else
          <p>Here you can share your donation points with other players.</p>
          <h4>Available donation points: {{$data['share']->getSenderDp()}}</h4>
          <p id="response"></p>
          <form class="form-inline" method="post">
            <div class="form-group">
              <div class="youplay-input">
                <input type="text" placeholder="how much dp?" class="form-control" name="dp" id="dp"/>
              </div>
            </div>
            <div class="form-group">
              <div class="youplay-input">
                <input type="text" placeholder="char name" class="form-control m_l_5" name="char" id="char"/>
              </div>
            </div>
            @Separator(20)
            <button type="submit" class="btn btn-sm" name="submit" id="submit" style="margin-left:10px;">Submit</button>
          </form>
        @endguest
    </div>
  </section>

  @include('layouts.cms.footer')
  @include('layouts.cms.scripts')
  <script>
    const shareBtn = document.getElementById('submit');
    shareBtn.addEventListener('click', e => {
      e.preventDefault();

      const dp =  document.querySelector('input[name="dp"]').value;
      const char =  document.querySelector('input[name="char"]').value;

      const response =  document.querySelector('#response');

      fetch('/user/getShareDp', {
        method: 'post',
        mode: "same-origin",
        credentials: "same-origin",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          dp,
          char
        })
      })
      .then(r => r.text())
      .then(data => {
        var parser = new DOMParser();
        var doc = parser.parseFromString(data, "text/html");
        response.innerHTML = doc.documentElement.innerHTML;
      })
    });
  </script>
@endsection
