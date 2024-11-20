<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdeaRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'coverage_range_id' => 'required|integer',
            'reference_url.*' => 'nullable|url',
            'reference_content.*' => 'nullable|string',
            'item_url.*' => 'nullable|url',
            'item_content.*' => 'nullable|string',
            'images.*' => 'nullable|image|max:2048', // 2MB制限
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'title.max' => 'タイトルは255文字以内で入力してください。',
            'content.required' => '内容は必須です。',
            'category_id.required' => 'カテゴリは必須です。',
            'coverage_range_id.required' => '公開範囲は必須です。',
            'images.*.image' => 'アップロードされたファイルは画像形式ではありません。',
            'images.*.max' => '画像のサイズは2MB以下にしてください。',
        ];
    }
}
