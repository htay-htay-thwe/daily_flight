<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class getFlightController extends Controller
{
    public function getFlight($origin,$destination,$departureDate){
    logger($origin);
        $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://agoda-com.p.rapidapi.com/flights/search-one-way?{$origin}&{$destination}&{$departureDate}",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: agoda-com.p.rapidapi.com",
		"x-rapidapi-key: 99b4a94a2fmsh9033e0eb81b71b8p14c7c3jsn3b8d4cf3f3c2"
	],
]);

$response = curl_exec($curl);
$data = json_decode($response, true);
logger($data);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	return "cURL Error #:" . $err;
} else {
    return response()->json([
      'flight' => $data,
       'message' => 'success'
    ]);
}
    }
}
