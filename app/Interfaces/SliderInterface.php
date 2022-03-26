<?php

namespace App\Interfaces;

interface SliderInterface 
{
    public function index();
    public function getSliderById($id);
    public function destroy($id);
    public function create(array $data);
    public function updateOrder($id, array $data);
    public function getFulfilledOrders();
}