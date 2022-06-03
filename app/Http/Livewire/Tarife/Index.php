<?php

namespace App\Http\Livewire\Tarife;

use App\Models\Treatment;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $perPage = 25;

    public function render()
    {
        return view('livewire.tarife.index',[
            'tratamente' => Treatment::searchPost($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }
}
