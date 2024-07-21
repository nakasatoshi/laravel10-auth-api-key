<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;

class GetHogeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required'
        ];
    }

    /**
     * バリーデーションのためのデータを準備する
     * 
     * @return void
     */
    protected function prepareForValidation()
    {
        //getで取得したパラメータをmergeする。
        $this->merge(['id' => $this->route('id')]);
    }

    /**
     * バリーデーションエラー時のレスポンスを設定する
     * 
     * @return void
     */
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => $validator->errors()->toArray()], Response::HTTP_BAD_REQUEST));
    }
}
