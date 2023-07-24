<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfilRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_perusahaan' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'gambar' => ['mimes:png,jpg,webp,svg', 'max:2000'],
            'alamat' => ['required', 'string'],
            'link_alamat' => ['required', 'url'],
            'no_hp' => ['required'], 'numeric',
            'email' => ['required', 'email'],
            'instagram' => ['required', 'url'],
            'facebook' => ['required', 'url'],
            'tiktok' => ['required', 'url'],
            'linkedin' => ['required', 'url'],
            'no_whatsapp' => ['required', 'numeric'],
        ];
    }
}
