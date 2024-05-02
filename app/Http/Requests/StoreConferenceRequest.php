<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConferenceRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:20',
            'description' => 'required|min:10',
            'addres' => 'required',
            'date' => 'required|date|after:yesterday'
        ];
    }


    public function messages(): array
    {
        return [
            'title.required' =>  __('app.titleReqError') ,
            'title.min' =>  __('app.titleMinError') ,
            'title.max' =>  __('app.titleMaxError') ,
            'description.required' =>  __('app.descriptionReqError') ,
            'description.min' =>  __('app.descriptionMinError') ,
            'addres.required' =>  __('app.addressReqError') ,
            'date.required' =>  __('app.dateReqError') ,
            'date.after' =>  __('app.dateValError') ,
        ];
    }
}
