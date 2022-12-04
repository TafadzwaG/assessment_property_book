<?php

namespace App\Admin\Controllers;

use App\Models\OurStory;
use App\Models\StoryPhoto;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StoryPhotoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'StoryPhoto';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new StoryPhoto());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('path', __('Path'));
        $grid->column('our_story_id', __('Our story id'));
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
        $show = new Show(StoryPhoto::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('path', __('Path'));
        $show->field('our_story_id', __('Our story id'));
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
        $form = new Form(new StoryPhoto());

        $form->text('title', __('Title'));
        $form->image('path', __('Path'));
        $form->select('our_story_id', __('Our story id'))->options(OurStory::all()->pluck('story_title', 'id'));;

        return $form;
    }
}
