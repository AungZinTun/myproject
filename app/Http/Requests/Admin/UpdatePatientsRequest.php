<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientsRequest extends FormRequest
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
            'pmct_code' => 'required',
            'name' => 'required',
            'dob' => 'required|date_format:'.config('app.date_format'),
            'address' => 'required',
            'gravida' => 'min:0|max:19|required|numeric',
            'parity' => 'min:0|max:19|required|numeric',
            'edd' => 'required|date_format:'.config('app.date_format'),
            'hiv_test_date' => 'nullable|date_format:'.config('app.date_format'),
            'current_art_start_date' => 'nullable|date_format:'.config('app.date_format'),
            'vl_test_result' => 'max:2147483647|nullable|numeric',
            'vl_test_date' => 'nullable|date_format:'.config('app.date_format'),
            'spouse_test_date' => 'nullable|date_format:'.config('app.date_format'),
            'dod' => 'nullable|date_format:'.config('app.date_format'),
            'baby_wt' => 'max:2147483647|nullable|numeric',
            'baby_outcome_dead_date' => 'nullable|date_format:'.config('app.date_format'),
            'dna_pcr_date' => 'nullable|date_format:'.config('app.date_format'),
            'baby_txt_start_date' => 'nullable|date_format:'.config('app.date_format'),
            'bf_stop_date' => 'nullable|date_format:'.config('app.date_format'),
            'dna_pcr_date1' => 'nullable|date_format:'.config('app.date_format'),
            'hiv_ab_test_date' => 'nullable|date_format:'.config('app.date_format'),
            'dna_pcr_date2' => 'nullable|date_format:'.config('app.date_format'),
            'hiv_ab_test_date1' => 'nullable|date_format:'.config('app.date_format'),
            'dna_pcr_date3' => 'nullable|date_format:'.config('app.date_format'),
        ];
    }
}
