{{-- extend Layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Add Toko')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/noUiSlider/nouislider.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="card">
  <div class="card-content">
    <p class="caption mb-0">Anda dapat input Data Toko Terbaru.</p>
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
              <h4 class="card-title">Input Data Store</h4>
            </div>
          </div>
        </div>
        <div id="view-input-fields">
          <div class="row">
            <div class="col s12">
              <form method="POST" action='{{route('admin.store.store')}}' class="row" enctype="multipart/form-data">
                @csrf
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="text" name="name" class="validate">
                    <label for="name">Nama</label>
                  </div>
                </div>
                
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="text" name="address" class="validate">
                    <label for="address">Alamat</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="text" name="latitude" class="validate">
                    <label for="latitude">Latitude</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="text" name="longitude" class="validate">
                    <label for="longitude">Longitude</label>
                  </div>
                </div>
                
                  <div class="col s12">
                    <div class="col s12 m4 l3">
                      <p>Upload Foto Toko</p>
                    </div>
                    <div class="input-field col s12">
                      <input type="file" id="input-file-now-custom-2" name="image"class="dropify" data-height="500" />
                    </div>
                  </div>
                
                <div class="col s12">
                  <div class="input-field col s12">
                    <textarea rows="4" aria-invalid="false" id="desc" name="desc" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMultiline css-1am47ot" style="height: 92px;">Masukan Deskripsi Toko</textarea>
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