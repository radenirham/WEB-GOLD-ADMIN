{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Dashboard')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/animate-css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist-plugin-tooltip.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/intro.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section">
   <!-- Current balance & total transactions cards-->
   <div class="row vertical-modern-dashboard">
     
      <div class="col s12 m8 l8 animate fadeRight">
         <!-- Total Transaction -->
         <div class="card">
            <div class="card-content">
               <h4 class="card-title mb-0">Total Transaction <i class="material-icons float-right">more_vert</i></h4>
               <p class="medium-small">This month transaction</p>
               <div class="total-transaction-container">
                  <div id="total-transaction-line-chart" class="total-transaction-shadow"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--/ Current balance & total transactions cards-->

   <div class="row">
      
      <div class="col s12 m6 l8">
         <div class="card subscriber-list-card animate fadeRight">
            <div class="card-content pb-1">
               <h4 class="card-title mb-0">User List <i class="material-icons float-right">more_vert</i></h4>
            </div>
            <table class="subscription-table responsive-table highlight">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@include('pages.intro')
@include('sweetalert::alert')
{!! Toastr::message() !!}

@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist.min.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist-plugin-fill-donut.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
{!! Toastr::message() !!}
<script src="{{asset('js/scripts/dashboard-modern.js')}}"></script>
<script src="{{asset('js/scripts/intro.js')}}"></script>
@endsection