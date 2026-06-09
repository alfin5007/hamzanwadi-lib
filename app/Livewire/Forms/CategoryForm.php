<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Category;

class CategoryForm extends Form
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('nullable|string')]
    public $description = '';

    public function store()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->reset();
    }
}
