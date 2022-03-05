<!-- Latest News -->
<h2 class="container h1">Latest News</h2>
<section class="youplay-news container">
  @if(count($data['news']->getNews()) > 0)
    @foreach($data['news']->getNews() as $res)
      <!-- Single News Block -->
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="#" class="angled-img">
              <div class="img-news">
                <img heıght="90" width="90" src="/resources/themes/YouPlay/images/template/a.png" alt="">
              </div>
            </a>
          </div>
          <div class="col-md-8">
            <div class="clearfix">
              <h3 class="h2 pull-left m-0"><a href="#">{{$res->Title}}</a></h3>
              <span class="date pull-right"><i class="fa fa-calendar"></i> {{date('F d Y H:i', strtotime($res->Date))}}</span>
            </div>
            <div class="description">
              <p>
                @php
                  $text = str_replace("\\n", "<br>", $res->Detail);
                  echo $text
                @endphp
              </p>
              <span class="date pull-right"><i class="fas fa-user-shield"></i> Staff</span>
            </div>
            {{-- <a href="#" class="btn read-more pull-left">Read More</a> --}}
          </div>
        </div>
      </div>
      <!-- /Single News Block -->
    @endforeach
  @endif
</section>
<!-- /Latest News -->
