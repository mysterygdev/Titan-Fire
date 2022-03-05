@extends('layouts.ap.app')
@section('index', 'sendNotice')
@section('title', 'Add Product')
@section('zone', 'AP')
@section('content')
  @include('partials.ap.nav')
  @include('partials.ap.header')
  <div class="pcoded-main-container">
    <div class="pcoded-wrapper">
      <div class="pcoded-content">
        <div class="pcoded-inner-content">
          {{-- is logged in and is staff --}}
          @if($data['user']->isAuthorized())
            {{-- is adm, gm or gma --}}
            @if($data['user']->isADM() || $data['user']->isGM() || $data['user']->isGMA())
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card align-items-center">
                        <div class="card-header">
                          <h5>Manage products</h5>
                        </div>
                        <div class="card-body">
                          <!-- need paginator for other pages of products, maybe datatables?? homepage example?? -->
                          <table class="table table-striped" id="NewPlayers">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Cost</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Count</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>2</td>
                                <td>image</td>
                                <td>main</td>
                                <td>3</td>
                                <td><button type="submit" class="btn btn-sm btn-primary" name="submit">Edit</button></td>
                                <td><button type="submit" class="btn btn-sm btn-danger" name="submit">Remove</button></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          @else
            {{redirect('/admin/auth/login')}}
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
