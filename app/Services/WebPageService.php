<?php

namespace App\Services;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\WebPage;

class WebPageService
{

    public function webPage()
    {
        return [
            'webPage' =>  WebPage::class::where('status', 1)->first(),
            'events' =>  Event::class::where('status', 1)->get(),
            'galleryTypes' =>  Gallery::class::where('status', 1)->get(),
            'galleryImages' =>  Image::whereNotNull('gallery_type')->get(),
            'bannerImages' =>  Image::whereNull('gallery_type')->get(),

        ];
    }
}
