<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'parent' => $this->relationLoaded('category') ? $this->category?->name : null,
            'actions' => view('components.show', [
                'route' => route('admin.categories.show', $this->id),
            ]).view('components.edit', [
                'route' => route('admin.categories.edit', $this->id),
            ]).view('components.destroy', [
                'route' => route('admin.categories.destroy', $this->id),
            ]),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
