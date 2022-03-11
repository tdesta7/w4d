<?php

namespace App\Http\Controllers;

use App\Models\type_tool;
use App\Models\type_tool\type_tool;
use Illuminate\Http\Request;

class TypeToolController extends Controller
{
    /**
     * Controller action for Tools URL of our app
     */
    public function show(){
        // controller action typically return a view and a model
        return view('tool_list',  //name of the view, i.e view/tool-list.blade.php
         [ 'tools'=> self::getTools()
        ]);
    }

    private static function getTools(): array{
        return[
            new type_tool('HandTool', '2000', 'Drill'),
            new type_tool('PowerTool', '2020', 'Power'),
        ];
    }
}
