@extends('layouts.cms.app')
@section('index', 'patchNotes')
@section('title', 'PatchNotes')
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
        @if(count($data['patchnotes']->getPatchNotes()) > 0)
          @foreach($data['patchnotes']->getPatchNotes() as $res)
            <div class="row">
              <h2>{{$res->Title}}</h2>
              <p class="section-description">
                @php
                  $text = str_replace("\\n", "<br>", $res->Detail);
                  echo $text
                @endphp
              </p>
              <span class="float-right">{{date('F d Y H:i', strtotime($res->Date))}}</span>
            </div>
            <div class="row items-container bottom-wrapper">
              <p>&nbsp;<br>&nbsp;</p>
            </div>
          @endforeach
        @else
          <p class="text-center">
            There is currently nothing to see here. Please check back later and see what has been added.
          </p>
        @endif
      </section>
    </main>
  </div>

    @include('layouts.cms.footer')

  {{-- @include('layouts.cms.footer') --}}
  @include('layouts.cms.scripts')
@endsection
