{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Scoring Store')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- users edit start -->
<div class="section users-edit">
  <div class="card">
    <div class="card-content">
      <!-- <div class="card-body"> -->
      <ul class="tabs mb-2 row">
        @if ($scoring)
        <li class="tab">
          <a class="display-flex align-items-center active" id="account-tab" href="#account">
            <i class="material-icons mr-1">search</i><span>Detail</span>
          </a>
        </li>
        @endif
        <li class="tab">
          <a class="display-flex align-items-center" id="information-tab" href="#information">
            <i class="material-icons mr-2">add</i><span>Insert Scoring</span>
          </a>
        </li>

      </ul>
      <div class="divider mb-3"></div>
      <div class="row">
        @if ($scoring)
        <div class="col s12" id="account">
        <div class="row indigo lighten-5 border-radius-4 mb-2" style="height:70px;padding:20px;">
            <div class="col s12 m4 users-view-timeline">
            <h6 class="indigo-text m-0" style="font-size:20px;">Score: <span>@if($scoring->score==NULL) 0 @endif {{$scoring->score}}</span></h6>
            </div>
            <div class="col s12 m4 users-view-timeline">
            <h6 class="indigo-text m-0" style="font-size:20px;">Status: <span>{{$scoring->status}}</span></h6>
            </div>
            <div class="col s12 m4 users-view-timeline">
            <h6 class="indigo-text m-0" style="font-size:20px;">File: @if($scoring->file==NULL)<span>Belum Ada File</span> @else <button >Download</button> @endif</h6>
            </div>
        </div>
      <div class="row">
        <div class="col s12">
            <h6 class="mb-2 mt-2"><i class="material-icons">person_outline</i> User Data</h6>
          <table class="striped">
            <tbody>
              <tr>
                  <td>User ID:</td>
                  <td>{{$scoring->user_id}}</td>
              </tr>
              <tr>
                <td>Name:</td>
                <td class="users-view-name">{{$scoring->user->name}}</td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td class="users-view-email">{{$scoring->user->email}}</td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td>{{$scoring->user->phone}}</td>
              </tr>
              <tr>
                <td>NIK:</td>
                <td>{{$scoring->no_ktp}}</td>
              </tr>
              <tr>
                <td>NPWP:</td>
                <td>{{$scoring->npwp}}</td>
              </tr>
              <tr>
                  <td>Tanggal Pengajuan:</td>
                  <td>{{date('d F Y', $scoring->screated_at)}}</td>
              </tr>

            </tbody>
          </table>
          {{-- <div class="col s12 display-flex justify-content-end mt-1">
                <button type="button" data-toggle="modal" data-target="#edit-modal" class="btn indigo">
                  Update Data</button>
              </div> --}}
        </div>
      </div>
        </div>
        @endif
        <div class="col s12" id="information">
          <!-- users edit Info form start -->
          <form id="infotabForm"  method="POST" action='{{route('admin.store.score')}}' enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12">
                    <h6 class="mb-4"><i class="material-icons mr-1">info</i>Pengajuan Credit Scoring</h6>
                  </div>
                  <div class="col s12 input-field">
                    {{-- <select id="accountSelect" name="user">
                      <option value=''> --Pilih User --</option>
                      @foreach ($user as $item)
                          <option value="{{ $item->id }}"> {{ $item->name }}</option>
                      @endforeach
                    </select> --}}
                    <input id="user" name="user" type="hidden" class="validate" value='{{$user->id}}'>
                    <input id="usr" name="usr" type="text" class="validate" value='{{$user->name}}' disabled>
                    <label>User</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="no_ktp" name="no_ktp" type="text" class="validate" placeholder="3277032405XXXXXXX">
                    <label for="phonenumber">NIK</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="store" name="store" type="hidden" class="validate" value='{{$store->STORE_ID}}'>
                    <input id="npwp" name="npwp" type="text" class="validate" placeholder="1101-2394-XXX-XXXX">
                    <label for="npwp">NPWP</label>
                  </div>
                  {{-- <div class="col s12 input-field">
                    <input id="score" name="score" type="text" class="validate">
                    <label for="score">Score</label>
                  </div> --}}
                </div>
              </div>
              <div class="col s12 display-flex justify-content-start mt-1">
                <button type="submit" class="btn indigo">
                  Submit</button>
              </div>
            </div>
          </form>
          <!-- users edit Info form ends -->
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
  <!--begin::Modal-->
<div class="modal fade" id="edit-modal" role="dialog" data-backdrop="static" tabIndex="-1" aria-labelledby="edit-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title"></h5>
            </div>
            <form id="edit-form">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama :</label>
                        <input required id="edit-nama" name="nama"/>
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input required id="edit-email" name="email" type="email"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="modal-action modal-close waves-effect waves-red btn-flat ">Tutup</a>
                    <button type="submit" class="btn">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->
</div>
<!-- users edit ends -->
@endsection
@include('pages.store.modal_update')

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/page-users.js')}}"></script>
@endsection