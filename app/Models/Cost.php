<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class Cost extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table = 'costs';
    protected $fillable = [
        'description',
        'date',
        'qty',
        'price',
    ];

    protected $hidden = ['updated_at', 'deleted_at'];

    // protected $appends = ['total_cost', 'qty_balance', 'hpp'];

    protected $casts = [
        'date' => 'date'
    ];


    // public function getTotalCostAttribute()
    // {
    //     return $this->cost * $this->qty;
    // }

    // public function getQtyBalanceAttribute()
    // {
    //     //
    // }


    // public function getHppAttribute() : float
    // {
    //     return $this->value_balance / $this->qty_balance;
    // }


    // public function getValueBalanceAttribute() : float
    // {
    //     return $this->cost * $this->qty;
    // }


}
