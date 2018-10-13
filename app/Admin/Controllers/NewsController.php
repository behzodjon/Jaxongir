<?php

namespace App\Admin\Controllers;

use App\News;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class NewsController extends Controller
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
        $grid = new Grid(new News);
        $grid->filter(function($filter){
            $filter->scope('new', 'Recently modified')
                ->whereDate('created_at', date('Y-m-d'))
                ->orWhere('updated_at', date('Y-m-d'));

        });

        $grid->id('Id');
        $grid->column('name')->display(function ($news){
            return "<b style='color:red'>$news</b>";
        });
        $grid->column('images')->display(function ($url) {
            return "<img width='100px' src='" . asset("uploads/" . $url) . "'>";
        });
        $grid->column('icon')->display(function ($news){
            return "<i class='fa $news'></i>";
        });

        $grid->created_at('Created at');
        $grid->updated_at('Updated at');
$grid->column('article');

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
        $show = new Show(News::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->images('Images');
        $show->icon('Icon');
        $show->created_at('Created at');
        $show->updated_at('Updated at');
        $show->panel()
            ->style('danger');
        $show->avatar()->image();
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News);

        $form->text('name', 'Name')->placeholder('Please enter name..');
        $form->image('images', 'Images');
        $form->icon('icon', 'Icon');


        $form->ckeditor('article');
        return $form;
    }





}
