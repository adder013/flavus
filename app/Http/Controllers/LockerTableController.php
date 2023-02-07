<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LockerTableRequest;
use App\LockerTable;

class LockerTableController extends Controller
{
    public function create(LockerTableRequest $request)
    {
        $table = new LockerTable();
        $table->locker_id = $request->locker_id;
        $table->year = $request->year;
        $table->customer = $request->customer;
        $position = LockerTable::orderBy('sort_position', 'desc')->limit(1)->pluck('sort_position')->first();
        $table->sort_position = $position ? $position + 1 : 1;
        $table->save();
        return response()->json($table, 200);
    }

    public function update(LockerTableRequest $request, LockerTable $lockerTable)
    {
        $lockerTable->update($request->all());
        return response()->json($request, 200);
    }

    public function sort(Request $request) : void
    {
        foreach ($request->tables as $key => $table) {
            $sort = LockerTable::where('id', '=', $table['id'])->first();
            $sort->sort_position = $key + 1;
            $sort->save();
        }
    }

    public function delete(LockerTable $lockerTable)
    {
        $lockerTable->delete();
        return response()->json(null, 204);
    }
}
