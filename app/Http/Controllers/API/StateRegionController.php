<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Region;
use App\State;
use Illuminate\Http\Request;

class StateRegionController extends Controller
{
    public function getState(Request $request)
    {
       $stateData=State::get();

        return $this->sendResponse($stateData->toArray(), 'State retrieved successfully');
    }
    
    public function getStateWiseRegion($id)
    {
       $stateData=Region::where('state_id',$id)->get();

        return $this->sendResponse($stateData->toArray(), 'Region retrieved successfully');
    }
}
