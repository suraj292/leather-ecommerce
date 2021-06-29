<?php

namespace App\Http\Livewire\Admin\Component;

use App\Models\admin_login;
use App\Models\select_product_color;
use Livewire\Component;

class SelectColor extends Component
{
    public $colors, $newColor, $colorId, $editColor, $deleteColorId, $adminPassword;
    public function render()
    {
        return view('livewire.admin.component.select-color')->layout('layouts.admin');
    }
    public function mount(){
        $this->colors = select_product_color::latest('id')->get();
    }
    public function addColor(){
        $this->validate(['newColor' => ['required', 'unique:select_product_color,color'],]);
        $color = select_product_color::create(['color'=>$this->newColor]);
        $this->colors->prepend($color);
        session()->flash('added', 'New Color added');
        $this->newColor = "";
    }
    public function getColor($id){
        $this->colorId = select_product_color::find($id);
        $this->editColor = $this->colorId->color;
    }
    public function updateColor(){
        $this->validate(['editColor' => ['required', 'unique:select_product_color,color'],]);
        $this->colorId->update(['color'=> $this->editColor]);
        $this->colors = select_product_color::latest('id')->get();
        $this->colorId = null;
    }
    public function deleteColor($id){
        $this->deleteColorId = select_product_color::find($id);
    }
    public function cancelDelete(){
        $this->deleteColorId = null;
    }
    public function confirmDelete(){
        $this->validate(['adminPassword'=>'required']);
        $admin = admin_login::find(1);
        if ($this->adminPassword == $admin->password){
            $this->deleteColorId->delete();
            $this->deleteColorId = null;
            $this->colors = select_product_color::latest('id')->get();
            session()->flash('success_delete', 'Color has been deleted.');
        }else{
            session()->flash('wrong_pass', 'Please enter correct password.');
        }
    }
}
