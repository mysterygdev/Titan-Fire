@extends('layouts.cms.app')
@section('index', 'guildRankings')
@section('title', 'Guild Rankings')
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
          <table class="table table-sm table-dark table-striped text-center">
            <thead>
              <tr>
                <th>Rank</th>
                <th>Guild Name</th>
                <th>Guild Leader</th>
                <th>Members</th>
                <th>Points</th>
                <th>Faction</th>
              </tr>
            </thead>
            <tbody>
              @if (count($data['guildrankings']) > 0)
                @foreach ($data['guildrankings'] as $fet)
                  <tr>
                    <td>{{$fet->Rank}}</td>
                    <td>{{$fet->GuildName}}</td>
                    <td>{{$fet->MasterName}}</td>
                    <td>{{$fet->TotalCount}}</td>
                    <td>{{$fet->GuildPoint}}</td>
                    @if ($fet->Country == 0)
                      <td><img src="/resources/themes/core/images/icons/guildranking/aol.png" height="35" width="35"></td>
                    @else
                      <td><img src="/resources/themes/core/images/icons/guildranking/uof.png" height="35" width="35"></td>
                    @endif
                  </tr>
                @endforeach
              @else
                There are currently no guilds found.
              @endif
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

    @include('layouts.cms.footer')

  {{-- @include('layouts.cms.footer') --}}
  @include('layouts.cms.scripts')
@endsection
