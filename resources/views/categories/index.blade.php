@extends('layouts.app')
@section('main-content')
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Category</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">blank</li> --}}
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{url('/categories/create')}}" >
                                Create New Category
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <table class="table" id="myTable">
                    @php
                        $serial = 1;
                    @endphp

                    <thead>
                        <tr>
                            <td>Serial</td>
                            <td>Category Name</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($category_list as $cat_list)
                        <tr>
                            <td> {{ $serial++ }}</td>
                            <td>{{ $cat_list->name }}</td>
                            <td>
                                <a href="{{url("/categories/$cat_list->id/edit")}}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{url("/categories/$cat_list->id")}}" method="post" onsubmit="return confirm('Do your really want to delet the category');">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
             
                            </td>
                        </tr>
                        @empty
                            {{ }}
                        @endforelse
                    </tbody>
                    
                  

                </table>
                
            </div>
        </div>
    
@endsection

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable({
      processing: true,
        serverSide: true,
        ajax: '/categories/list',
        columns: [
            {data: 'DT_RowIndex',name: 'id'},
            {data: 'name'},
            {data: 'action', orderable: false, searchable: false},
        ]
    });
} );

// $(document).ready( function () {
//     $('#myTable').DataTable();
// } );
    </script>
@endpush