<?php

namespace App\Http\Requests;

use App\Models\Cost;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'description' =>  [
                'required',
                Rule::in(['penjualan', 'pembelian']),
            ],
            'date' => 'required|date_format:Y-m-d',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
        ];
    }

    protected function prepareForValidation(): void
    {
        $qty = $this->description == 'penjualan' ?0 - $this->qty : $this->qty;
        // $cost = $this->description == 'penjualan' ? Cost::latest()->hpp : $this->price;
        $cost = $this->price;
        $this->merge([
            'qty'=> $qty,
            'cost'=> $cost
        ]);
    }
}
