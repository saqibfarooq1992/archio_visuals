<?php
namespace App\Repositories;

use App\Models\Slider;
use App\Services\SliderServices;
use Illuminate\Http\Request;
use App\Repositories\SliderRepository;


class SliderRepository extends SliderServices
{
    protected $model;
    
    public function __construct(Slider $model)
    {
        $this->model = $model;
    }
    
    /**
     * set payload data for posts table.
     * 
     * @param Request $request [description]
     * @return array of data for saving.
     */
    protected function setDataPayload(SliderRepository $data)
    {
        return [
            'title' => $data->input('title'),
            'author_id' => $data->user()->id,
            'description' => $data->input('description'),
            'status' => $data->input('status'),
        ];
    }
}