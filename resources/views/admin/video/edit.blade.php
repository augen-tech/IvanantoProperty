@extends('admin.appAdmin')

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Video</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
    <form action="{{route('admin.video.update', $video->id)}}" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">File Upload Gambar Thumnail</h4>      
                        <label for="input-file-now">Gambar Thumbnail</label>
                        <input required name="path" type="file" id="input-file-now" class="dropify" />
                        <br>
                        <label for="input-file-now">Title</label>
                        <input required name="title" type="text" class="form-control form-control-line" value="{{$video->title}}">
                        <br>
                        <br>
                        <label for="input-file-now">Description</label>
                        <input required name="description" type="text" class="form-control form-control-line" value="{{$video->description}}">
                        <br>
                        <br>
                        <label for="input-file-now">Link Youtube</label>
                        <input required name="link" type="text" class="form-control form-control-line" value="{{$video->link}}">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-block btn-sml btn-success">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('material/plugins/dropify/dist/css/dropify.min.css')}}">
@endsection

@section('script')
<!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- jQuery file upload -->
    <script src="{{asset('material/plugins/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });

    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

@endsection