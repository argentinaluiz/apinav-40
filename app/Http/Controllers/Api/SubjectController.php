<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BasicCrudController;
use App\Http\Resources\SubjectResource;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends BasicCrudController
{
    private $rules = [
        'name' => 'required|max:255',
        'code' => 'required | max:255',
    ];

    protected function model()
    {
        return Subject::class;
    }

    protected function rulesStore()
    {
        return $this->rules;
    }

    protected function rulesUpdate()
    {
        return $this->rules;
    }

    protected function resource()
    {
        return $this->rules;
    }

    protected function resourceCollection()
    {
        return SubjectResource::class;
    }
}
