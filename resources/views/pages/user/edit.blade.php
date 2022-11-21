{{-- extend Layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Edit User')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/noUiSlider/nouislider.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="card">
  <div class="card-content">
    <p class="caption mb-0">Anda dapat mengubah data user.</p>
  </div>
</div>
<!-- Input Fields -->
<div class="row">
  <div class="col s12">
    <div id="input-fields" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Input Data User</h4>
            </div>
          </div>
        </div>
        <div id="view-input-fields">
          <div class="row">
            <div class="col s12">
              <form method="POST" action='{{route('admin.user.update')}}' class="row">
                @csrf
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="hidden" name="id" value="{{$data['id']}}" class="validate">
                    <input type="text" name="name" value="{{$data['name']}}" class="validate">
                    <label for="name">Nama</label>
                  </div>
                </div>
                
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="email" name="email" value="{{$data['email']}}" class="validate">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate"name="password" >
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('vendors/noUiSlider/nouislider.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/form-elements.js')}}"></script>
@endsection