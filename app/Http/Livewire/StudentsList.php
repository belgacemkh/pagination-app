<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class StudentsList extends Component
{
    use WithPagination;

    public $query;

    public $perPage = 10;

    protected $paginationTheme = 'bootstrap';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.students-list', [
        'students' => Student::where('name', 'like', '%'.$this->query.'%')->paginate($this->perPage),
                    ]);
    }
}
