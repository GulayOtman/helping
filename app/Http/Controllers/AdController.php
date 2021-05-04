<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Services\AdService;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function save(Request $request)
    {
        try {
            $adService = new AdService;
            $adService->setAd($request->id ? Ad::find($request->id) : new Ad);
            $adService->save(
                $request->title,
                $request->description,
                $request->city_id,
                $request->address,
                $request->price,
                $request->start_date,
                $request->end_date,
                $request->image
            );

            return redirect()->route('index')->with([
                'type' => 'success',
                'data' => 'Yeni İlan Başarıyla Oluşturuldu'
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
