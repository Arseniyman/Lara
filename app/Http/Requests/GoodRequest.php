<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodRequest extends FormRequest
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
            "name" => "required|max:255",
            "description" => "required|max:1000",
            "photo" => "required|max:255",
            "price" => "required"
        ];
    }

    public function messages() {
        return [
            "name.required" => "Поле имя обязательное",
            "description.required" => "Поле описание обязательное",
            "photo.required" => "Поле ссылка на фото обязательное",
            "price.required" => "Поле цена обязательное",
            "name.max" => "Поле не должно быть больше 255 символов",
            "descriprion.max" => "Поле не должно быть больше 1000 символов",
            "photo.max" => "Поле не должно быть больше 255 символов" 
        ];
    }

}
