<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\User;

it('should create user', function () {
    $user = User::factory()->create();

    expect($user->all())->toHaveCount(1);
});

it('should create employer through user', function () {
    $user = User::factory()->create();

    $user->employer()->create([
        'name' => fake()->name,
        'logo' => fake()->imageUrl(),
    ]);

    var_dump($user->employer);

    expect($user->employer)->not()->toBeNull();
    expect($user->employer)->toBeInstanceOf(Employer::class);
    expect($user->employer->all())->toHaveCount(1);
});
