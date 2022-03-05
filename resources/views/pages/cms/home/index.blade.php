@extends('layouts.cms.app')
@section('index', 'home')
@section('title', 'Home')
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
    <div class="row pattern">
      <section class="features" id="features">
        <div class="container">
          <table width="100%">
            <tr>
              <td style="width: 60%">
                <img height="95%"; width="95%"; src="/resources/themes/Originals/images/container2.png" align="left";>
              </td>
              <td style="width: 90%; align=right;">
                <h2>Server Status</h2>
                @Separator(10)
                Server Status
                <h2>Players Online</h2>
                Players Online
                <p class="text-center">Total players online: 1</p>
                <p class="text-center">AoL: 1</p>
                <p class="text-center">UoF: 1</p>
              </td>
            </tr>
          </table>
        </div>
      </section>
    </div>
  </div>

    @include('layouts.cms.footer')

  {{-- @include('layouts.cms.footer') --}}
  @include('layouts.cms.scripts')
@endsection
