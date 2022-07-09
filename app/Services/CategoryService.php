<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return Category
     */
    public static function store(StoreCategoryRequest $request): Category
    {
        return Category::query()->create($request->validated());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return bool
     */
    public static function update(UpdateCategoryRequest $request, Category $category): bool
    {
        return $category->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return bool|null
     */
    public static function destroy(Category $category): bool|null
    {
        return $category->delete();
    }
}
