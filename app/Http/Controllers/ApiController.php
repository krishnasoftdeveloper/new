<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function makeApiRequest()
    {
        $url = 'https://qa.ourbus.com//ourbus/wsapi/commuter/search/amenities';
        $clientId = 1;

        // Make GET request with parameters
        $response = Http::get($url, [
            'client_id' => $clientId,
        ]);

        // Check if the request was successful (status code 2xx)
        if ($response->successful()) {
            // Process the response data
            $data = $response->json();
            // Do something with $data
            return $data;
        } else {
            // Handle the error, e.g., log or return an error message
            return response()->json(['error' => 'API request failed'], $response->status());
        }
    }
}
