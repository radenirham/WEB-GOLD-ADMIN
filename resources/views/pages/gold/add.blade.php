{{-- extend Layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Form Elements')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/noUiSlider/nouislider.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="card">
  <div class="card-content">
    <p class="caption mb-0">Anda dapat input jumlah generate emas.</p>
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
              <h4 class="card-title">Input Data Emas</h4>
            </div>
          </div>
        </div>
        <div id="view-input-fields">
          <div class="row">
            <div class="col s12">
              <form method="POST" action='{{route('admin.gold.store')}}' class="row">
                @csrf
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="number" name="weight" class="validate">
                    <label for="weight">weight</label>
                  </div>
                </div>

                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="text" name="produced_by" class="validate">
                    <label for="produced_by">Di Produksi Oleh</label>
                  </div>
                </div>

                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="text" name="manufactured_by" class="validate">
                    <label for="manufactured_by">Manufaktur</label>
                  </div>
                </div>

                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="text" name="fineness" class="validate">
                    <label for="fineness">Fineness</label>
                  </div>
                </div>
                
                <div class="col s12">
                  <div class="input-field col s12">
                    <input type="number" name="generate" class="validate">
                    <label for="generate">Jumlah Generate</label>
                  </div>
                </div>
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
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
{!! Toastr::message() !!}
<script src="{{asset('js/scripts/form-elements.js')}}"></script>
@endsection