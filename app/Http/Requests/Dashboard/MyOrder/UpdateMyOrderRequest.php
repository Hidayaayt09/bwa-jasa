<?php

namespace App\Http\Requests\Dashboard\MyOrder;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Order;
use Symfony\Component\HttpFoundation\Response;
use illuminate\Validation\Rule;


class UpdateMyOrderRequest extends FormRequest
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
            'buyer_id' => [
                'nullable', 'integer', 
            ],
            'freelancer_id' => [
                'nullable', 'string', 
            ],
            'service_id' => [
                'nullable', 'integer',
            ],
            'file' => [
                'required', 'mimes:zip', 'max:1024',
            ],
            'note' => [
                'required', 'string', 'max:10000',
            ],
            'expired' => [
                'required', 'date', 
            ],
            'order_status_id' => [
                'nullable', 'integer',
            ],
        ];
    }
}
