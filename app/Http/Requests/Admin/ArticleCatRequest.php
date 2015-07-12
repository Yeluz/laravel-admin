<?php

// +----------------------------------------------------------------------
// | date: 2015-07-10
// +----------------------------------------------------------------------
// | ArticleCatRequest.php: 后端文章分类表单验证
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace App\Http\Requests\Admin;

class ArticleCatRequest extends BaseFormRequest {

    /**
     * 验证错误规则
     *
     * @return array
     */
    public function rules(){
        return [
            'cat_name'  => ['required'],
            'pid'       => ['required', 'numeric'],
            'status'    => ['required', 'in:1,2'],
            'sort'      => ['required', 'digits_between:0,255'],
        ];
    }

    /**
     * 验证错误提示
     *
     * @return array
     */
    public function messages(){
        return [
            'cat_name.required'     => trans('validate.cat_name_require'),
            'pid.required'          => trans('validate.pid_require'),
            'status.required'       => trans('validate.status_require'),
            'status.in'             => trans('validate.status_error'),
            'sort.require'          => trans('validate.sort_require'),
            'sort.digits_between'   => trans('validate.sort_error')
        ];
    }

}
