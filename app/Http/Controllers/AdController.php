<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Services\AdService;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        
    }

    public function save(Request $request)
    {
        $adService = new AdService;
        $adService->setAd($request->id ? Ad::find($request->id) : new Ad);
        $ad = $adService->save($request);

        return redirect()->back()->with([
            'type' => 'success',
            'data' => 'Başarıyla Oluşturuldu'
        ]);
    }

    public function delete()
    {

    }
}
