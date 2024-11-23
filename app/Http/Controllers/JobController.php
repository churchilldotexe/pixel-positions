<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Contracts\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobs = Job::all()->groupBy('featured');

        return view('jobs.index', ['featured' => $jobs[0], 'jobs' => $jobs[1], 'tags' => Tag::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job): void
    {
        //
    }
}