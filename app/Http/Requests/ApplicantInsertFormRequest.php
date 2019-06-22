<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantInsertFormRequest extends FormRequest
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
            'name' => 'required',
            'dob' => 'required',
            'nrc' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'nationality' => 'required',
            'race' => 'required',
            'religion' => 'required',
            'education' => 'required',
            'marital_status' => 'required',
            'township' => 'required', 
            'address' => 'required',
            'attachment_file_name' => 'required',
            'cv_file_name' => 'required',
            'job_id' => 'required',
        ];
    }
}
