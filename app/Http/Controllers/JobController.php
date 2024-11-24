<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobs = Job::query()
            ->latest()
            ->with(['employer', 'tags'])
            ->get()
            ->groupBy('featured');

        return view('jobs.index', ['jobs' => $jobs[0],  'featured' => $jobs[1], 'tags' => Tag::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $attributes = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'min:3'],
            'location' => ['required', 'min:3'],
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time', 'Gig'])],
            'url' => ['required', 'url'],
            'tags' => ['required', 'min:3'],
        ]);

        $attributes['featured'] = $request->has('featured');
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['featured']) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
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
