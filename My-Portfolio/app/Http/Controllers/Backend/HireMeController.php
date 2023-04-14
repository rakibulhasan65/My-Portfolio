<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\CategoryListTypes;
use App\Models\Backend\HireMeModel;
use DB;

class HireMeController extends Controller
{
    public function hireMeIndex()
    {
        return view('backend.pages.hireMe');
    }

    public function storeData(Request $request)
    {
        $dataStore = new HireMeModel();
        $dataStore->orderType = $request->orderType;
        $dataStore->price = $request->price;
        $dataStore->duration = $request->duration;
        $dataStore->durationType = $request->durationType;
        $findId = $request->orderType;
        $multiInputArray = $request->categoryAddMoreInputField;
        foreach ($multiInputArray as $arrData) {
            foreach ($arrData as $arrData) {
                $catDataStore = new CategoryListTypes;
                $catDataStore->catTitleDetails = $arrData;
                $catDataStore->cat_id = $findId;
                $catDataStore->save();
            }
        }
        $dataStore->save();
        return back();
    }
}
