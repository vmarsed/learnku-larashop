<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户';

    /**
     * Make a grid builder.
     * grid() 方法来决定列表页要展示哪些列，以及各个字段对应的名称
     * Laravel-Admin 会通过读取数据库自动把所有的字段都列出来
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('email_verified_at', __('Email verified at'))->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->column('password', __('Password'));
        $grid->column('remember_token', __('Remember token'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        // 不在页面显示 `新建` 按钮，因为我们不需要在后台新建用户
        $grid->disableCreateButton();
        // 同时在每一行也不显示 `编辑` 按钮
        $grid->disableActions();

        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });


        return $grid;
    }

    /**
     * Make a show builder.
     * detail() 方法用来展示用户详情页
     * 通过调用 detail() 方法来决定要展示哪些字段
     * Laravel-Admin 默认会通过读取数据库自动把所有的字段都列出来
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * 教程删除这个方法
     * form() 方法用于编辑和创建用户，由于我们不会在管理后台去新增和编辑用户，所以可以把这个方法删除。
     *
     * @return Form
     */
    protected function form_deleteThisFunction()
    {
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
