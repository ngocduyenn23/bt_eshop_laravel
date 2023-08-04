<?php

return [

    'required'=> ':attribute là bắt buộc',
    'min' => [
        'numeric' => ' :attribute ko dc nhỏ hơn :min.',
        'file' => ' :attribute ko dc nhỏ hơn :min KB.',
        'string' => ' :attribute ko dc nhỏ hơn :min ký tự.',
    ],
    'max' => [
        'numeric' => ' :attribute ko dc lớn hơn :max.',
        'file' => ' :attribute ko dc lớn hơn :max KB.',
        'string' => ' :attribute ko dc lớn hơn :max ký tự.',
    ],

    'same' => 'The :attribute và :other không khớp nhau.',
    'unique' => 'The :attribute đã tồn tại.',

    'attributes' => [
        "ten_danh_muc"=>"Tên danh mục",
        "name"=> " Tên" ,
        "password"=>" mật khẩu",
        "cf_password"=> " Nhập lại mật khẩu",
        "email"=> "Email",
    ],

    // alt shift f
    // ctrl k f
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

   

    'attributes' => [],

];
