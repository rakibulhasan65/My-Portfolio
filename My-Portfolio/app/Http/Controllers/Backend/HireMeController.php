<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\CategoryListTypes;
use App\Models\Backend\HireMeModel;

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
        $findId = HireMeModel::all()->last();
        $subCate = $request->categoryAddMoreInputField;
        if ($subCate) {
            foreach ($subCate as  $subCate) {
                $storeCat = new CategoryListTypes();
                $storeCat->categoryAddMoreInputField = $subCate;
                $storeCat->cat_id = $findId->id;
                $dataStore->save();
            }
        }
        // return response()->json($request->categoryAddMoreInputField);
        $dataStore->save();
    }
}
