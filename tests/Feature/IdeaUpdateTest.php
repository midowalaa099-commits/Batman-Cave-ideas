<?php

use App\Models\Idea;
use App\Models\User;

it('updates an idea description', function () {
    $user = User::factory()->create();
    $idea = Idea::create([
        'user_id' => $user->id,
        'description' => 'Old description',
        'state' => 'pending',
    ]);

    $this->actingAs($user)
        ->patch('/ideas/' . $idea->id, [
            'description' => 'Updated description',
        ])
        ->assertRedirect('/ideas');

    expect($idea->fresh()->description)->toBe('Updated description');
});
