{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','GOLD')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.css')}}">
@include('sweetalert::alert')
@endsection

{{-- page content --}}
@section('content')

<div class="section section-data-tables">
  <div class="card">
    <div class="card-content">
      <p class="caption mb-0">Anda dapat genereate kode emas di sini</p>
      <a class="btn waves-effect waves-light right" href='{{route('admin.gold.add')}}'>Tambah Data
      </a>
    </div>
  </div>
  <!-- DataTables example -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="button-trigger" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Data Emas</h4>
          <div class="row">
            <div class="col s12">
            </div>
            <div class="col s12">
              <table id="data-table-simple" class="display">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Berat</th>
                    <th>Serial</th>
                    <th>Kode Generate</th>
                    <th>fineness</th>
                    <th>di produksi</th>
                    <th>Manufaktur</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($golds as $item)
                  <tr>
                    <td>{{$item->GOLD_ID}}</td>
                    <td>{{$item->GOLD_WEIGHT}}</td>
                    <td>{{$item->GOLD_SERIAL}}</td>
                    <td>{{$item->generated_code}}</td>
                    <td>{{$item->fineness}}</td>
                    <td>{{$item->produced_by}}</td>
                    <td>{{$item->manufacture->name}}</td>
                    <td class="text-center">
                            <a href="#" class="btn btn-sm" method="post">
                            <i class="material-icons">edit</i>
                            </a>
                            <a href="gold/delete/{{$item->GOLD_ID}}"  method="post" onclick="return confirm('Yakin ingin menghapus data?')">
                            <i class="material-icons">delete</i>
                            </a>
                        </td>
                  </tr>
                  @endforeach
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
{!! Toastr::message() !!}
<script src="{{asset('js/scripts/data-tables.js')}}"></script>
@endsection