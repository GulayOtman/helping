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

    public function save(
        $title,
        $description,
        $cityId,
        $address,
        $price,
        $startDate,
        $endDate,
        $image
    )
    {
        $this->ad->title = $title;
        $this->ad->description = $description;
        $this->ad->city_id = $cityId;
        $this->ad->address = $address;
        $this->ad->price = $price;
        $this->ad->start_date = $startDate;
        $this->ad->end_date = $endDate;
        $this->ad->image = $image;
        $this->ad->save();

        return $this->ad;
    }
}
