<?php

namespace App\Admin\Controllers;

use App\Hotels;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class HotelsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Hotels);

        $grid->id('Id');
        $grid->name('Name');
        $grid->column('images')->display(function ($url) {
            return "<img width='100px' src='" . asset("uploads/" . $url) . "'>";
        });
        $grid->text('Text');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');
        $grid->stars('Stars');
        $grid->address('Address');


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
        $show = new Show(Hotels::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->images('Images');
        $show->text('Text');
        $show->created_at('Created at');
        $show->updated_at('Updated at');
        $show->stars('Stars');
        $show->address('Address');


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Hotels);

        $form->text('name', 'Name');
        $form->image('images', 'Images');
        $form->textarea('text', 'Text');
        $form->number('stars', 'Stars');
        $form->text('address', 'Address');


        return $form;
    }
}
