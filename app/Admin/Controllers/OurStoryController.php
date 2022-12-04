<?php

namespace App\Admin\Controllers;

use App\Models\OurStory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OurStoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OurStory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OurStory());

        $grid->column('id', __('Id'));
        $grid->column('story_title', __('Story title'));
        $grid->column('who_we_are', __('Who we are'));
        $grid->column('vision', __('Vision'));
        $grid->column('history', __('History'));
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
        $show = new Show(OurStory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('story_title', __('Story title'));
        $show->field('who_we_are', __('Who we are'));
        $show->field('vision', __('Vision'));
        $show->field('history', __('History'));
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
        $form = new Form(new OurStory());

        $form->text('story_title', __('Story title'));
        $form->textarea('who_we_are', __('Who we are'));
        $form->textarea('vision', __('Vision'));
        $form->textarea('history', __('History'));

        return $form;
    }
}
