<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Services\FilterService;
use FilterIterator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    protected $filterService;

    public function __construct(FilterService $filterService)
    {
        $this->filterService = $filterService;
    }
    public function filter(Request $request)
    {

        $keyword = trim($request->input('keyword', ''));

        if ($keyword === '') {
            return redirect()->back()->with('error', 'Please enter a keyword');
        }
        $query = $this->filterService->filter($keyword);
        $guests = $query->paginate();
        if ($guests->isNotEmpty()) {
            return view('weddings.index', compact('guests'))->with('success', 'Record has been found ');
        } else {
            return redirect()->back()->with('error', 'Record not found');
        }
    }
}
