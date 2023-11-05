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
                            <th>اسم المنتج</th>
                            <th>وصف المنتج</th>
                            <th>وحدة المنتج</th>
                            <th>سعر المنتج</th>
                            <th>الكمية المتاحة</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i =0;?>
                      @foreach ($product as $items)
                      <?php $i++;?>
                        <tr>
                            <td>{{ $i }}</td>                          
                            <td>{{ $items->productName }}</td>                          
                            <td>{{ $items->productDescription }}</td>                          
                            <td>{{ $items->productCategory }}</td>                          
                            <td>{{ $items->productPrice }}</td>                          
                            <td>{{ $items->stockQuantity }}</td>                          
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
                <form action="{{ route('Product.store') }}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="unit_id">Unit:</label>
                            <select class="form-control" name="unit_id" id="unit_id">
                                @foreach ($unit as $items)
                                    <option value="{{ $items->id }}">{{ $items->unitName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="productName">Product Name:</label>
                            <input type="text" class="form-control" name="productName" id="productName">
                        </div>
                    </div>
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="productDescription">Product Description:</label>
                            <input type="text" class="form-control" name="productDescription" id="productDescription">
                        </div>
                    </div>
                

                    <div class="box-body">
                        <div class="form-group">
                            <label for="productCategory">Product Category:</label>
                            <input type="text" class="form-control" name="productCategory" id="productCategory">
                        </div>
                    </div>
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="productPrice">Product Price:</label>
                            <input type="text" class="form-control" name="productPrice" id="productPrice">
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="stockQuantity">Stock Quantity:</label>
                            <input type="number" class="form-control" name="stockQuantity" id="stockQuantity">
                        </div>
                    </div>

                
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
