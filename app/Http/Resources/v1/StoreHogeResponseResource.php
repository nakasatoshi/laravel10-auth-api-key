<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreHogeResponseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'hoge_culomn_01' => $this->hoge_culomn_01,
            'hoge_culomn_02' => $this->hoge_culomn_02,
            'hoge_culomn_03' => $this->hoge_culomn_03,
            'hoge_culomn_04' => $this->hoge_culomn_04,
            'hoge_culomn_05' => $this->hoge_culomn_05,
        ];
    }
}
