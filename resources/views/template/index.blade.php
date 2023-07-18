@extends('layouts.company')

@section('content')
<link rel="stylesheet" href="{{ asset('/assets/css/template-list/index.css') }}">

<main class="pt-5">
    <div class="container px-4">
        <div class="row justify-content-between align-items-center mb-5">
            <div class="col-lg-3 mb-3 mb-lg-0">
                <input type="text" class="form-control rounded-pill" placeholder="タイトルで検索する">
            </div>
            <div class="col-lg-3 mb-3 mb-lg-0">
                <select name="" id="" class="form-select rounded-pill">
                    <option value="">所有者でフィ</option>
                    <option value="">会社2</option>
                    <option value="">会社3</option>
                    <option value="">会社4</option>
                </select>
            </div>
            <div class="col-lg-3 mb-3 mb-lg-0 d-flex justify-content-end">
                <a class="btn btn-primary px-4" href="{{ route('template.create') }}"><i class="fa fa-solid fa-plus"></i> 作成</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive border rounded" style="min-height: 500px; overflow-y: auto;">
                    <table class="table" style="min-width: 1200px; overflow-x: auto;">
                        <thead>
                            <tr class="bg-secondary-grey">
                                <th class="py-4 text-center">タイ卜ル</th>
                                <th class="py-4">更新しました-</th>
                                <th class="py-4">プレビュー</th>
                                <th class="py-4">アクション</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="ps-5">
                                        <i class="fa fa-solid fa-envelope me-2"></i> 募集項目名
                                    </div>
                                </td>
                                <td>
                                    27/06/23
                                </td>
                                <td>
                                    2023/07/20
                                </td>
                                <td>
                                    <div>
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa fa-solid fa-eye me-3"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-solid fa-edit me-3"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-solid fa-copy me-3"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ps-5">
                                        <i class="fa fa-solid fa-envelope me-2"></i> デフォルトの成功メール
                                    </div>
                                </td>
                                <td>
                                    14/09/22
                                </td>
                                <td>
                                    これで完了です。このメールは、あなたの回答が受け取られたことを確認するもの...
                                </td>
                                <td>
                                    <div>
                                        <a href="">
                                            <i class="fa fa-solid fa-eye me-3"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-solid fa-copy me-3"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="ps-5">
                                        <i class="fa fa-solid fa-comment-sms me-2"></i> デフォルトのリマインダーSMS
                                    </div>
                                </td>
                                <td>
                                    14/09/22
                                </td>
                                <td>
                                    こんにちは、{candidate_first_name} さん。{company_name} との面接を忘...
                                </td>
                                <td>
                                    <div>
                                        <a href="">
                                            <i class="fa fa-solid fa-eye me-3"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-solid fa-copy me-3"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection