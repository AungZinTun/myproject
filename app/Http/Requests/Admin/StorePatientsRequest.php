<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'date_enrolled' => 'required|date_format:'.config('app.date_format'),
            'pmct_code' => 'required|unique:patients',
            'name' => 'required',
            'dob' => 'required|date_format:'.config('app.date_format'),
            'address' => 'required',
            'gravida' => 'min:0|max:19|required|numeric',
            'parity' => 'min:0|max:19|required|numeric',
            'edd' => 'required|date_format:'.config('app.date_format'),
        ];
    }
}
