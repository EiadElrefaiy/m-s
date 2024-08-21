<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        $totalVisitors = Visit::count();
        $newVisitors = Visit::whereDate('created_at', today())->count();
        $oldVisitors = $totalVisitors - $newVisitors;

        return view('your-view-name', compact('totalVisitors', 'newVisitors', 'oldVisitors'));
    }
}
