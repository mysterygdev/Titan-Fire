@extends('layouts.cms.app')
@section('index', 'bossRecords')
@section('title', 'Boss Records')
@section('zone', 'CMS')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <header id="home">
        @include('partials.cms.nav')
        <h1>
          <img onload="this.style.opacity='1';" class="big-logo" src="/resources/themes/Originals/images/shaiya_titan_logo.png" alt="Dragonic big logo">
        </h1>
      </header>
    </div>
    @include('partials.cms.divider')
    <main>
      <section class="container">
        <div class="table-responsive">
          <table class="table table-striped text-center">
            <thead>
              <tr class="boss-record">
                <th class="boss-record">Boss</th>
                <th class="boss-record">Killed by</th>
                <th class="boss-record">Respawns in</th>
              </tr>
            </thead>
            @php
              $time = date("Y-m-d H:i:s.000");
            @endphp
            @foreach($data['bossrecords']->MobID as $value)
              @php
                $data['bossrecords']->getBossRecords($time,$value);
              @endphp
            @endforeach
          </table>
        </div>
      </section>
    </main>
  </div>

    @include('layouts.cms.footer')

  {{-- @include('layouts.cms.footer') --}}
  @include('layouts.cms.scripts')
@endsection
