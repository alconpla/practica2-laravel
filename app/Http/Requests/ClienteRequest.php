<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
    public function rules() {
        return [
            'nombre'       => 'required|max:50',
            'apellidos'       => 'required|max:100',
            'fecha_de_nacimiento'       => 'required',
            'correo'       => 'required|email|max:100',
            'ip'       => 'nullable|max:45',
            'telefono'       => 'nullable|max:11',
            'direccion'       => 'nullable|max:50',
            'estado_civil'       => 'nullable|max:50',
            'sueldo_anual'       => 'nullable|max:11',
        ];
    }
}