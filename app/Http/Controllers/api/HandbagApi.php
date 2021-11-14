<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\HandbagResource;
use App\Http\Controllers\Controller;
use App\Models\Handbag;

class HandbagApi extends Controller
{
    public function index()
    {
        return HandbagResource::collection(Handbag::all());
    }
}
