<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
use App\Models\Category;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'image'=>$this->image,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'user_id'=>"/api/users/".$this->user_id,
            'category_id'=>"/api/categories/".$this->category_id
        ];
    }
}
