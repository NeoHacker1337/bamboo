@extends('backend.admin.layouts.master') 
@section('content') 
<section>
    <div class="container">
    <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3 text-center">Add Porfolio<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span></h1>
            <form id="category" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-12">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control mt-4">
                    </div>
                     
                </div>
                 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-4">Save</button>
                </div>
            </form>

            <div class="container">
                <table id="category-table" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>                             
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
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
        $('#category').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route("admin.save.porfolio.category") }}',
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    if(response.success)
                        {
                            toastr.success(response.message);                           
                            setTimeout(function(){
                                location.reload();
                            }, 3000);
                        }
                        else
                        {
                            toastr.error(result.msg);
                        
                        }
                  
                }
            });
        });
    });

    
</script>
<script>
 $(document).on('click', '.deleteClass', function(){
    var slider_id = $(this).data('slider-id');
    $.ajax({
        url: 'portfolio-category/' + slider_id,
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
                $('#category-table').dataTable(
                    {
                        "processing": true,
                        pageLength: 10,
                        "serverSide": true,
                        'checkboxes': {
                            'selectRow': true
                        },
                        "ajax": {
                            url: "{{ route('admin.getPortfolioCategory') }}",
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
                            {"targets": 2, "name": "headline", 'searchable':false, 'orderable':false},
                            {"targets": 3, "name": "description", 'searchable':false, 'orderable':false},                          
                        ]
                    });
            }
            $.fn.tableload();
})
</script>
@endsection