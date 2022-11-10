<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use LivewireAlert, WithFileUploads;
    
    public $listeners = ['createCategory'];
    
    public $createCategory;

    public $image;
    
    public array $rules = [
        'category.code' => '',
        'category.name' => 'required',
    ];

    public function generateCode()
    {
        $this->category->code = Str::random(5);
    }

    public function mount(Category $category)
    {
        $this->category = $category;
        $this->category->code = $this->category->code ?? $this->generateCode();
    }

    public function render()
    {
        return view('livewire.admin.categories.create');
    }

    public function createCategory()
    {
        $this->resetErrorBag();

        $this->resetValidation();

        $this->createCategory = true;
    }

    public function create()
    {
        $this->validate();

        if($this->image){
            $imageName = Str::slug($this->category->name).'.'.$this->image->extension();
            $this->image->storeAs('categories',$imageName);
            $this->category->image = $imageName;
        }

        $this->category->save();

        $this->emit('refreshIndex');
        
        $this->alert('success', 'Category created successfully.');
        
        $this->createCategory = false;
    }
}