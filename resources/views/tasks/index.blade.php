@extends('layouts.app')
@section('main-content')
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Task</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">blank</li> --}}
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{url('/tasks/create')}}" >
                                Create New Task
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
                            <td>Task Name</td>
                            <td>Category</td>
                            <td>Status</td>
                            <td>Deadline</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                  
                    
                    @forelse ($tasks as $item)
                    <tr>
                        <td> {{ $serial++ }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->category->name }}</td>
                        {{-- <td>{{ $item->owner->name }}</td> --}}
                        <td>{{ App\Enums\StatusType::getDescription($item->status) }}</td>
                        <td>{{ $item->deadline != null? $item->deadline : '-' }}</td>
                        <td>
                            <a href="{{url("/tasks/$item->id/edit")}}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{url("/tasks/$item->id")}}" method="post" onsubmit="return confirm('Do your really want to delet the Task');">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
         
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="6"> NO Category</td>
                        </tr>
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
        ajax: '/tasks/list',
        columns: [
            {
              data: 'DT_RowIndex',
              name: 'id'
            },

            {
              data: 'title' ,
              name: 'title'
            },

            {
             data: 'category.name',
             name: 'category.name'
            },


           {
            data: 'status_name',
            name: 'status'
           },
           
           {
            data: 'deadline',
            name: 'deadline'
           },

            {data: 'action', orderable: false, searchable: false},
        ]
    });
} );
    </script>
@endpush