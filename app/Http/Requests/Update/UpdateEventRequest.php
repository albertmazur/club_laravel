<?php

namespace App\Http\Requests\Update;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "id" => ["required" , "integer"],
            "name" => ["required", "string"],
            "description" => ["string"],
            "date" => ["required", "date", "after:today"],
            "time" => ["required", "date_format:H:i"],
            "price" => ["required", "decimal:0,2"],
            "stadium_id" => ["required", "integer"]
        ];
    }
}
