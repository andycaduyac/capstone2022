<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Table;
use App\Models\Cottage;
use App\Models\FunctionHall;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    // public $cottages, $functionhall, $rooms, $tables;


    public function index(){
        $cottages = Cottage::all();
        $functionhall = FunctionHall::all();
        $rooms = Room::all();
        $tables = Table::all();

        return view('frontend.index', compact('cottages', 'functionhall', 'rooms', 'tables'));
    }

    public function available(Request $request){

        $request->validate([
            'book_date'                         =>      'required|date|unique',
            // 'table_id'                          =>      'nullable|integer',
            // 'functionhall_id'                   =>      'nullable|integer',
            // 'cottage_id'                        =>      'nullable|integer',
        ]);


        return view('frontend.available.index');
    }

    public function viewType(){
        $cottages = Cottage::all();
        $functionhall = FunctionHall::all();
        $rooms = Room::all();
        $tables = Table::all();

        return view('frontend.index', compact('cottages', 'functionhall', 'rooms', 'tables'));
    }
    public function showCottages(){
        $cottages = Cottage::all();

        return view('frontend.show.cottage-index', compact('cottages'));
    }
    public function showFunctionhall(){
        $functionhall = FunctionHall::all();

        return view('frontend.show.functionhall-index', compact('functionhall'));
    }
    public function showRooms(){
        $rooms = Room::all();

        return view('frontend.show.room-index', compact('rooms'));
    }
    public function showTables(){
        $tables = Table::all();

        return view('frontend.show.table-index', compact('tables'));
    }
}
