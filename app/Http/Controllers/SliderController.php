<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Repositories\SliderRepository;
use Exception;
use Illuminate\Http\Request;
// use Illuminate\Http\Requests\SliderRequest;
use App\Models\Slider;

class SliderController extends Controller
{
    protected $repository;

    // public function __construct(SliderRepository $repository)
    // {
    //     $this->repository = $repository;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = $this->repository->paginate($request);
        // return response()->json(['items' => $items]);
        $sliders = Slider::get();
        return view('sliders.index' , compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        // $item = $this->repository->store($data);
        $data->validate([
            'heading' => ['required', 'string', 'max:255'],
            'slogan' => ['required', 'string'],
            'picture' => ['required'],

        ]);

        $sliders = Slider::create([
            'heading'   =>  $data->heading,
            'slogan'    =>  $data->slogan,
            'picture' =>   $data->file('picture')->store('sliders'),
        ]);
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = $this->repository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //    $sliders = Slider::find($id);
        $item = $this->repository->edit($id);
       return view('sliders.edit' , compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = $this->repository->update($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->destroy($id);
    }
}
