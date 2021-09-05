<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bus_stop_id' => 'required|exists:bus_stops,id',
            'bus_number' => 'required|unique:buses|max:50',
        ];
    }
}