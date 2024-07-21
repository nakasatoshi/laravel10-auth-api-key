<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GetHogeRequest;
use App\Http\Requests\StoreHogeRequest;
use App\Models\Hoge;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\v1\GetHogeResponseResource;
use App\Http\Resources\v1\StoreHogeResponseResource;

class HogeApiController extends Controller
{
    public function get(GetHogeRequest $request): JsonResource
    {
        $hoge = Hoge::find($request->id);
        return new GetHogeResponseResource($hoge);
    }

    public function store(StoreHogeRequest $request): JsonResource
    {
        $hoge = Hoge::find($request->id);
        $hoge->fill([
                        'hoge_culomn_03' => $request->hoge_culomn_03,
                        'hoge_culomn_04' => $request->hoge_culomn_04
                    ])->save();
        return new StoreHogeResponseResource($hoge);
    }
}
