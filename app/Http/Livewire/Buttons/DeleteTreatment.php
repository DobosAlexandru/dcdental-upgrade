<?php

namespace App\Http\Livewire\Buttons;

use Livewire\Component;

class DeleteTreatment extends Component
{
    public $tratament;
    public $confirmingPostDeletion = false;

    public function confirmPostDeletion()
    {
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('confirming-delete-post');
        $this->confirmingPostDeletion = true;
    }

    public function deletePost()
    {
        $this->tratament->delete();

        session()->flash('success', 'Treatment Succesfully Deleted');

        return redirect()->route('tratamente.index');
    }


    public function render()
    {
        return view('livewire.buttons.delete-treatment');
    }
}
