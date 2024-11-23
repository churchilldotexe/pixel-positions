<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

it('belongs to Employer', function () {
    //arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    //act && assert
    expect($job->employer->is($employer))->toBeTrue();
});

test('Jobs has many tags', function () {
    //Arrange
    $job = Job::factory()->create();
    $job->tag('FrontEnd'); //create a tags
    //Act
    //Assert
    expect($job->tags)->toHaveCount(1);
});
