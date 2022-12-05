<?php

namespace App\Admin\Controllers;

use App\Models\BannerVedio;
use App\Models\HomeBanner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BannerVedioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BannerVedio';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BannerVedio());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('path', __('Path'));
        $grid->column('home_banner_id', __('Home banner id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BannerVedio::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('path', __('Path'));
        $show->field('home_banner_id', __('Home banner id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BannerVedio());
        
        $form->select('home_banner_id', __('Home banner id'))->options(HomeBanner::all()->pluck('title', 'id'));;
        $form->text('title', __('Title'));
        $form->image('path', __('Path'));


        return $form;
    }
}
