@extends('layouts.cms.app')
@section('index', 'rewards')
@section('title', 'Rewards')
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
        @guest
          <p>Please login to continue.</p>
        @else
          {{display('get_reward_modal','','0','2','Redeem Reward')}}
          <div class="table-responsive">
          <table class="table table-dark text-center">
            <thead>
              <tr>
                <th>Prize ID</th>
                <th>Kills Required</th>
                <th>Icon</th>
                <th>Reward</th>
                <th>Redeem</th>
              </tr>
            </thead>
            <tbody>
              @php
                $data['rewards']->getPvPRewards();
                $index=1;
              @endphp
              @foreach ($data['rewards']->Rewards as $Reward)
                <tr>
                  <td>{{$index}}</td>
                  <td>{{$data['rewards']->Kills['K'.$index]}}</td>
                  <td><div class="RankIcon RankIcon{{$index}}"></div></td>
                  <td>{{$Reward}}</td>
                  @if ($data['rewards']->k1 >=$data['rewards']->Kills['K'.$index])
                    @php
                      $data['rewards']->validateKills($index);
                    @endphp
                    @if($data['rewards']->rowCount==0)
                      <td><button class="open_send_prize_modal" data-toggle="modal" data-id="{{$index}}~{{$Reward}}~{{$_SESSION['User']['UserUID']}}" data-target="#get_reward_modal">Receieve</button></td>
                    @else
                      <td class="tac">You already redeemed this Prize!</td>
                    @endif
                  @else
                    <td>You need more kills to redeem this Prize!</td>
                  @endif
                </tr>
                @php $index++; @endphp
              @endforeach
            </tbody>
          </table>
        </div>
        @endguest
      </section>
    </main>
  </div>

    @include('layouts.cms.footer')

  {{-- @include('layouts.cms.footer') --}}
  @include('layouts.cms.scripts')
@endsection
