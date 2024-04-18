<?php

namespace App\Livewire;

use App\Models\Post;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class ManagePost extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;
 
    public Post $post;
 
    public function deleteAction(): Action
    {
        return Action::make('delete')
            ->requiresConfirmation()
            ->modalDescription('Modal description text')
            ->action(fn () => redirect('/'));
    }
}
