@extends('adminlte::page')

@section('title', '管理后台')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">图片信息管理</h3>
                    <div class="card-tools pull-right">
                        <div class="pull-right mb-10 hidden-sm hidden-xs">
                            {{ link_to_route('admin.image.create', "添加图片信息", [], ['class' => 'btn btn-success btn-xs']) }}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
{!! $dataTable->scripts() !!}
@endpush
