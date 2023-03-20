<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostRequest;
use App\Models\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{

    public function index(Request $request)
    {
        $costs = Cost::paginate($request->per_page ?? 10);
        // $data = $costs->data->map(function (Cost $cost, int $index)
        // {
        //     switch ($cost->id) {
        //         case '0':
        //             $total_cost = $cost->qty * $cost->cost;
        //             return [
        //                 "id"=> $cost->id,
        //                 "description"=> $cost->description,
        //                 "date"=> $cost->date,
        //                 "qty"=> $cost->qty,
        //                 "cost"=>$cost->price,
        //                 "total_cost"=> $total_cost,
        //                 "qty_balance"=>$cost->qty,
        //                 "value_balance"=>$total_cost,
        //                 "hpp"=> $total_cost/ $cost->qty,
        //             ];
        //             break;

        //         default:
        //         $costVal = $cost->description == 'penjualan' ? $cost[$index - 1]->hpp : $cost->price;
        //         $total_cost = $cost->qty * $costVal;
        //         $qty_balance = $cost[$index -1 ]->qty_balance + $cost->qty;
        //         $value_balance = $cost[$index -1 ]->value_balance + $total_cost;
        //             return [
        //                 "id"=> $cost->id,
        //                 "description"=> $cost->description,
        //                 "date"=> $cost->date,
        //                 "qty"=> $cost->qty,
        //                 "cost"=> $cost,
        //                 "total_cost"=> $total_cost,
        //                 "qty_balance"=>$qty_balance,
        //                 "value_balance"=>$value_balance,
        //                 "hpp"=> $value_balance/$qty_balance,
        //             ];
        //             break;
        //     }
        // });
        // $costs->data = $data;
        return response($costs);

    }

    public function store(CostRequest $request)
    {
        $data = Cost::create($request->all());
        return response($data);
    }

    public function show(Cost $cost)
    {
        return response($cost);
    }

    public function update(CostRequest $request, Cost $cost)
    {
        $cost->update($request->all());
        return response($cost);
    }

    public function destroy(Cost $cost)
    {
        $cost->delete();
        return response('deleted');
    }
}
