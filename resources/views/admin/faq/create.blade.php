@extends('admin.appAdmin')

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">FAQ Create</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">FAQ</a></li>
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
        <!-- <div class="card"> -->
            <div class="card card-body">
                <!-- <h4 class="card-title">Benefit</h4> -->
                
                <form  action="{{route('admin.faq.store')}}"  method="POST">
                    <div class="form-group">                        
                        <label>Question</label>
                        <textarea required name="question" class="form-control" rows="1" required></textarea>
                        <br>
                        <label>Answer</label>
                        <textarea required name="answer" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-sml btn-success">Edit</button>
                </form>       
            </div>
        <!-- </div> -->
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection



