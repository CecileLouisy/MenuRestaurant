<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>"required|max:100",
            "category"=>"required|max:50",
            "ingredients"=>"required",
            "price"=>"required|between:0,999",
            "description"=>"required"            
        ];
    }
    public function messages () {
        return [
            "name.required"=>"Veuillez renseigner le nom du plat.",
            "name.max"=>"Le nom doit comporter 100 caractères au maximum.",
            "category.required"=>"Veuillez renseigner la catégorie du plat.",
            "category.max"=>"La catégorie doit comporter 50 caractères au maximum.",
            "ingredients.required"=>"Veuillez renseigner la liste des ingrédients.",
            "price.required"=>"Veuillez renseigner le prix du plat.",
            "price.between"=>"Le prix du plat doit être inférieur à 1000 euros.",
            "description.required"=>"Veuillez renseigner la description du plat."
        ];
    }
}
