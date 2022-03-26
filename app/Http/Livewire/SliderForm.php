<?php

namespace App\Http\Livewire;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;
class SliderForm extends Component
{
    use WithPagination;

    public $title;
    public $description;
    public $slider_image;
    public $slider_id;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        // 'slider_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
    ];

  
    public function storeSlider()
    {
        $this->validate();
        $post = Slider::create([
            'title' => $this->title,
            'description' => $this->description
        ]);
        $this->reset();
    }
    public function edit($id)
    {
        $post = Slider::find($id);
        $this->slider_id = $slider->id;
        $this->title = $slider->title;
        $this->description = $slider->description;
    }
    public function update()
    {
        $slider = Slider::updateOrCreate(
            [
                'id'   => $this->slider_id,
            ],
            [
                'title' => $this->title,
                'description' => $this->description
            ],

        );

        $this->reset();
    }
    public function destroy($id)
    {
        Slider::destroy($id);
    }

    

    public function render()
    {
        return view('livewire.slider-form', ['sliders' => Slider::latest()->paginate(10)]);
    }

}
