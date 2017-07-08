<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictureUploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];

        $photos = count($this->input('upload_pics'));
        foreach(range(0, $photos) as $ndx) {
            $rules['upload_pics' . $ndx]  = 'image|mimes:jpeg,bmp,png|size:2000|filename_regex:/^\d+-\w+/';
            //
        };

        return $rules;
    }
}
