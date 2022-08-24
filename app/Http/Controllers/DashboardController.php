<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $category = Category::where('created_by',Auth::id())->get();
        $task = Task::where('created_by',Auth::id())->get();
        return view('dashboard',compact('category','task'));
    }
}
