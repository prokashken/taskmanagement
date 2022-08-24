@extends('layouts.app')
@section('main-content')

        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Create a New Task</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">blank</li> --}}
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{url('/tasks')}}" role="button">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{url('/tasks')}}" method="post">
                @csrf
            <div class="form-group col">
                <label class="col-sm-4 col-form-label">Task Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                </div> 
                
                <label class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                    <input style="height:200px;" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                </div> 
                
                <label class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                <select class="form-control @error('status') is-invalid @enderror" name="status">
                  <option value="">--Please Select--</option>
                  @foreach ($status_list as $key => $value)
                     <option value="{{$key}}" {{ old('status') == strval($key) ? 'selected':'' }}>{{ $value }}</option>
                  @endforeach
                </select>
                @error('status')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
                </div>

                <label class="col-sm-4 col-form-label">Category</label>
                <div class="col-sm-8">
                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                  <option value="" >--Please Select--</option>
                  @foreach ($category as $item)
                     <option value="{{$item->id}}"{{ old('category_id') == $item->id? 'selected':'' }}>{{$item->name}}</option>
                  @endforeach
                </select>
                @error('category_id')
                    <small style="color:red;">{{ $message }}</small>
                @enderror
                </div>
                

                <label class="col-sm-4 col-form-label">Deadline</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control @error('deadline') is-invalid @enderror" name="deadline" value="{{old('deadline')}}">
                    @error('deadline')
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
