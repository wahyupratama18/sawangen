<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryDescriptionRequest;
use App\Http\Requests\UpdateCategoryDescriptionRequest;
use App\Models\CategoryDescription;

class CategoryDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryDescriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryDescriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryDescription  $categoryDescription
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryDescription $categoryDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryDescription  $categoryDescription
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryDescription $categoryDescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryDescriptionRequest  $request
     * @param  \App\Models\CategoryDescription  $categoryDescription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryDescriptionRequest $request, CategoryDescription $categoryDescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryDescription  $categoryDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryDescription $categoryDescription)
    {
        //
    }
}
