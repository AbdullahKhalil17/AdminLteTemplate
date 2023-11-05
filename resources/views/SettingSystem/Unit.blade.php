@extends('layouts.master')
@section('css')
@section('title')
    {{ trans('dashboard_trans.Dashboard') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('dashboard_trans.Dashboard') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('setting_trans.Units') }}</h3>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {{-- <div class="box box-default"> --}}
                    <div class="box-header with-border">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                            {{ trans('setting_trans.AddUnit') }}
                        </button>
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('setting_trans.unitName') }}</th>
                            <th>{{ trans('setting_trans.unitSymbol') }}</th>
                            <th>{{ trans('setting_trans.processing') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i =0;?>
                        @foreach ($unit as $item)
                        <?php $i++;?>
                            <tr>
                              <td>{{ $i }}</td>
                              <td>{{ $item->unitName }}</td>
                              <td>{{ $item->unitSymbol }}</td>
                              <td>{{ $item->unitSymbol }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{{ trans('setting_trans.AddUnit') }}</h4>
                </div>
                <form action="{{ route('Unit.store') }}" method="post">
                  @csrf
                  <div class="box-body">
                      <div class="form-group">
                          <label for="unitName">{{ trans('setting_trans.unitName') }}</label>
                          <input type="text" name="unitName" class="form-control" id="unitName">
                      </div>
                      <div class="form-group">
                          <label for="unitSymbol">{{ trans('setting_trans.unitSymbol') }}</label>
                          <input type="text" name="unitSymbol" class="form-control" id="unitSymbol">
                      </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" id="saveButton" class="btn btn-primary">Save changes</button>
                  </div>
              </form>              
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
@endsection
@section('js')
@endsection
