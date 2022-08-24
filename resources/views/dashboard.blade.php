@extends('layouts.app')
@section('main-content')
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 style="color: blue;">Hello {{ Auth::user()->name }}</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            {{-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blank</li>
                            </ol> --}}
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        {{-- <div class="dropdown">
                            <a class="btn btn-primary " href="#" role="button">
                            
                            </a>
                          
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <h4>Your created task: {{ $task->count() != null?$task->count() : "No task created yet" }}</h4>
                @php
                $pending = 0;
                $ongoing = 0;
                $done  = 0;
                    foreach($task as $task_row)
                    {
                        if ($task_row->status == 0) {
                         $pending++;   
                        }elseif ($task_row->status == 1) {
                            $ongoing++;
                        }else {
                            $done++;
                        }
                    }
                @endphp
                <h4>Your Pendig task: {{ $pending }}</h4>
                <h4>Your Ongoing task: {{$ongoing}}</h4>
                <h4>Your Completed task: {{$done}}</h4>
                <hr>
                <h4>Created Category: {{ $category->count() }}</h4>
                
            </div>
        </div>
    
@endsection