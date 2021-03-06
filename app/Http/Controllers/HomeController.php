<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
//		 $this->middleware('auth');
    }

    /**
     * Show the all ads per page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index', [
            'ads' => Ad::where('user_id', '<>', auth()->user()->id())->paginate(10)
        ]);
    }

    /**
     * Show the filtered ads per page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search(Request $request)
    {
        $keyword = $request->keyword ?? null;
        $startDate = $request->start_date ?? null;
        $endDate = $request->end_date ?? null;

        return view('pages.index', [
            'ads' => Ad::
            where('user_id', '<>', auth()->user()->id())->
            where('title', 'like', '%' . $keyword . '%')->
            where(function ($query) use ($startDate) {
                $startDate != null ? $query->where('start_date', '>=', $startDate) : null;
            })->
            where(function ($query) use ($endDate) {
                $endDate != null ? $query->where('end_date', '<=', $endDate) : null;
            })->
            paginate(10),
            'keyword' => $keyword,
            'startDate' => $startDate,
            'endDate' => $endDate
        ]);
    }

    public function adCreate()
    {
        return view('pages.create', [
            'categories' => Category::all(),
            'cities' => City::all()
        ]);
    }

    public function myAds()
    {
        return view('pages.my-ads', [
            'ads' => Ad::paginate(10)
        ]);
    }
}
