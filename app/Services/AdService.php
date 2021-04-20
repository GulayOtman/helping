<?php

namespace App\Services;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdService
{
    private $ad;

    /**
     * @return Ad
     */
    public function getAd(): Ad
    {
        return $this->ad;
    }

    /**
     * @param Ad $ad
     */
    public function setAd(Ad $ad): void
    {
        $this->ad = $ad;
    }

    public function save(Request $request)
    {
        $this->ad->title = $request->title;
        $this->ad->save();

        return $this->ad;
    }
}
