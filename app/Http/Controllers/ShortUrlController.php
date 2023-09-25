<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortRequest;

use App\Models\ShortUrl;

class ShortUrlController extends Controller
{
    public function short (ShortRequest $request)
    {
        if ($request->original_url){
            $new_url = ShortUrl::create([
                'original_url'=> $request->original_url
            ]);
            if($new_url){
            $short_url = base_convert($new_url->id, 10,36);
            $new_url -> update([
                'short_url'=> $short_url
            ]);
            return redirect()->back()->with('success_message','Your Short Url:' . url($short_url));
            }
        }
    return back();
    }
    public function show($link)
    {
        dd($link);
    }
}
