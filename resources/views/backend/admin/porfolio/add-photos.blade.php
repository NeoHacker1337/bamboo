@extends('backend.admin.layouts.master') 
@section('content') 
<section>
    <div class="container">
    <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3 text-center">Add Photos<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span></h1>
                <form id="image-upload-form" enctype="multipart/form-data">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <input type="hidden" value="{{$portfolio->id}}" name="image_id">
                    <div class="row">
                    <input type="file" name="images[]" multiple class="form-control">
                    <button type="submit" class="btn btn-primary mt-3">Upload</button>
                    </div>
                </form>
                
    

            <div class="container">
                <table id="" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>                             
                            <th>Image</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php
                     
                     $photo =  \App\Models\Image::where('image_id',$portfolio->id)->get();
 
                        
                    @endphp
                   
                    <tbody>
                        @foreach ($photo as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src="{{ asset('storage/images/' . $item->path) }}" width="200" height="200"></td>
                                <td><button class="btn btn-danger btn-sm deleteClass" data-id="{{ $item->id }}">Delete</button></td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
    </div>
</section>

@endsection
@section('javascript')
 <!-- In the head section of your layout or view -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

<!-- At the bottom of the body section -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    


    $(document).ready(function () {
    $('#image-upload-form').submit(function(event) {
        event.preventDefault();

        var formData = new FormData(this);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        formData.append('_token', csrfToken);

        $.ajax({
            url: '{{ route('upload.images') }}',
            type: 'POST',
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                if(response.success) {
                    toastr.success(response.message);
                    setTimeout(function(){
                        location.reload();
                    }, 3000);
                } else {
                    toastr.error(response.errors);
                }
            },
            error: function(xhr, status, error) {
                toastr.error(error);
            }
        });
    });
});



    
</script>
<script>
 $(document).on('click', '.deleteClass', function(){
    var slider_id = $(this).data('id');
    $.ajax({
        url: 'add-more-photos/' + slider_id,
        method: 'GET',          
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            if(response.success) {
                toastr.success(response.message);
                setTimeout(function(){
                    location.reload();
                }, 3000);
            } else {
                toastr.error(response.message);
            }
        }
    });
});


$(function () {
    $.fn.tableload = function (e) {
                $('#sliders-table').dataTable(
                    {
                        "processing": true,
                        pageLength: 10,
                        "serverSide": true,
                        'checkboxes': {
                            'selectRow': true
                        },
                        "ajax": {
                            url: "{{ route('admin.getimagesDatable') }}",
                            dataFilter: function (data) {
                                var json = jQuery.parseJSON(data);
                                json.recordsTotal = json.recordsTotal;
                                json.recordsFiltered = json.recordsFiltered;
                                json.data = json.data;
                                return JSON.stringify(json); // return JSON string
                            }
                        },
                        "order": [[0, 'desc']],
                        "columns": [
                            {"targets": 0, "name": "id", 'searchable': false, 'orderable': true},
                            {"targets": 1, "name": "title", 'searchable':false, 'orderable':false},                                                      
                            {"targets": 2, "name": "action", 'searchable': false, 'orderable': false}, 
                        ]
                    });
            }
            $.fn.tableload();
})
</script>
@endsection