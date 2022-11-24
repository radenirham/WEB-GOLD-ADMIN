{{-- extend Layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Add Banner')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/noUiSlider/nouislider.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="card">
  <div class="card-content">
    <p class="caption mb-0">Anda dapat menambah data Banner.</p>
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
              <h4 class="card-title">Input Data Banner</h4>
            </div>
          </div>
        </div>
        <div id="view-input-fields">
          <div class="row">
            <div class="col s12">
              <form method="POST" action='{{route('admin.banner.store')}}' class="row" enctype="multipart/form-data">
                @csrf
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="text" name="tittle" class="validate">
                    <label for="tittle">Tittle</label>
                  </div>
                </div>

                <div class="col s12">
                  <div class="col s12 m4 l3">
                      <p>Description</p>
                    </div>
                  <div class="input-field col s12">
                    <textarea type="text" name="desc" class="validate"></textarea>
                    
                  </div>
                </div>
                
                  <div class="col s12">
                    <div class="col s12 m4 l3">
                      <p>Upload Banner</p>
                    </div>
                    <div class="input-field col s12">
                      <input type="file" id="input-file-now-custom-2" name="banner_file"class="dropify" data-height="500" />
                    </div>
                  </div>
                <div class="col s12">
                    <input id="datepicker" name="from" type="text" class="birthdate-picker datepicker"
                      placeholder="Pick a Date From">
                    
                    <small class="errorTxt4"></small>
                  </div>
                  <div class="col s12">
                    <input id="datepicker" name="to" type="text" class="birthdate-picker datepicker"
                      placeholder="Pick a Date To">
                    
                    <small class="errorTxt4"></small>
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