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
                            <a class="btn btn-primary" href="{{url('/categories')}}" role="button">
                               Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{url('/categories')}}" method="post">
                @csrf
            <div class="form-group col">
                <label class="col-sm-4 col-form-label"><h4>Category Name</h4></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <div class="input-group mb-0">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div> 
            </div>
            </form>    
            
                
            </div>
        </div>
    
@endsection
