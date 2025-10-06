<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});


test('can have tags', function () {
    $job = Job::factory()->create();

    // $job->tags()->attach(Tag::factory()->create());
    $job->tag('Frontend');

    // expect($job->tags)->not->toBeEmpty();
    expect($job->tags)->toHaveCount(1);
});