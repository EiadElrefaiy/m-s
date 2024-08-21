<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class LocaleController extends Controller
{
    public function switchLocale($locale)
    {
        if (in_array($locale, ['en', 'ar'])) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
