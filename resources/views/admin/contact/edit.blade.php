@extends('admin.appAdmin')

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
              <form class="form-material m-t-0" action="{{route('admin.contact.update', $contact->id)}}"  method="POST">
                <div class="form-group row">
                  <label for="example-text-input" class="col-2 col-form-label">Email</label>
                  <div class="col-10">
                    <input required name="email" class="form-control" type="email" value="{{$contact->email}}" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label required for="example-search-input" class="col-2 col-form-label">Phone</label>
                  <div class="col-10">
                    <input name="phone" class="form-control" type="number" value="{{$contact->phone}}" id="example-search-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">Address</label>
                  <div class="col-10">
                    <input required name="address" class="form-control" type="text" value="{{$contact->address}}" id="example-email-input">
                  </div>
                </div>   
                <div class="form-group row">
                  <label for="example-email-input" class="col-2 col-form-label">Instagram</label>
                  <div class="col-10">
                    <input required name="instagram" class="form-control" type="text" value="{{$contact->instagram}}" id="example-email-input">
                  </div>
                </div>              
                <button type="submit" class="btn btn-block btn-sml btn-success">Edit</button>
              </form>
            </div>
        </div>
    </div>
</div>
    
    
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