<?php

namespace Iplocation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Iplocation {
    public function IpLocationTrack($ip) {
        $response = Http::get("http://ipinfo.io/{$ip}/json");
        $data = $response->json();

        return $data;
    }
}
