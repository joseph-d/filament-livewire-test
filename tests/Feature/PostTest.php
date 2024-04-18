<?php

use App\Filament\Resources\PostResource\Pages\ViewPost;
use App\Livewire\ManagePost;
use App\Models\Post;
use function \Pest\Livewire\livewire;

beforeEach(function () {
    $this->signIn();
    $this->post = Post::factory()->create();
});

describe('Testing on ViewJob::class', function () {

    // PASSING
    it('renders the LivewireTest::class component on resource view', function () {
        livewire(ViewPost::class, [
            'record' => $this->post->getRouteKey(),
        ])
            ->assertSeeLivewire(ManagePost::class)
            ->assertSee('New Livewire Component')
            ->assertSee('Delete');
    });

    // FAILING
    it('has a delete action', function () {
        livewire(ViewPost::class, [
            'record' => $this->post->getRouteKey(),
        ])
            ->assertActionExists('delete');
    });

    // FAILING
    it('triggers modal when delete button pressed', function () {
        livewire(ViewPost::class, [
            'record' => $this->post->getRouteKey(),
        ])
            ->mountAction('delete')
            ->assertSee('Modal description text');
    });

    // FAILING
    it('redirects when modal action confirmed', function () {
        livewire(ViewPost::class, [
            'record' => $this->post->getRouteKey(),
        ])
            ->callAction('delete')
            ->assertRedirect('/');
    });

});

describe('Testing on LivewireTest::class directly', function () {

    // PASSING
    it('has a delete action', function () {
        livewire(ManagePost::class)
            ->assertActionExists('delete');
    });

    // PASSING
    it('triggers modal when delete button pressed', function () {
        livewire(ManagePost::class)
            ->mountAction('delete')
            ->assertSee('Modal description text');
    });

    // PASSING
    it('redirects when modal action confirmed', function () {
        livewire(ManagePost::class)
            ->callAction('delete')
            ->assertRedirect('/');
    });

});