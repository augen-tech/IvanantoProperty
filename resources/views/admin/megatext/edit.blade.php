@extends('admin.appAdmin')

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Megatext Edit</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
@endsection



@section('content')
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form class="form-material m-t-0" action="{{route('admin.megatext.update', $megatext->id)}}"  method="POST">
                    <div class="form-group">
                        <!-- <label>Type Below</label> -->
                        <textarea required name="value" class="form-control" rows="5" >{{$megatext->value}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-sml btn-success">Edit</button>
                </form>       
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection



