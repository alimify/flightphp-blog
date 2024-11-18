<?php

namespace app\controllers;

use app\records\ArticleRecord;
use app\records\CategoryRecord;
use Flight;

class CategoryController extends BaseController
{

	public function index()
	{
		$categories = (new CategoryRecord())->order('id desc')->findAll();
        return $this->render('admin/category/index', [
            'categories' => $categories
        ]);
	}

    public function create()
    {
        return $this->render('admin/category/form');
    }

    public function store()
    {
        $data = $this->request()->data;
        $slug = string_to_slug($data->name);
        $existing = (new CategoryRecord())->eq('slug',$slug)->find();
        if($existing->id){
            return $this->redirect($this->getUrl('admin.category.create'));
        }
        $category = new CategoryRecord();
        $category->displayName = $data->name;
        $category->aliasName = $slug;
        $category->insert();

        return $this->redirect($this->getUrl('admin.category.index'));
    }

    public function edit($id)
    {
        $category = (new CategoryRecord())->find($id);
        return $this->render('admin/category/form', [
            'category' => $category
        ]);
    }

    public function update($id)
    {
        $category = (new CategoryRecord())->find($id);
        $data = $this->request()->data;
        $slug = string_to_slug($data->name);
        $category->displayName = $data->name;
        $category->aliasName = $slug;
        $category->update();

        return $this->redirect($this->getUrl('admin.category.edit',[
            'id' => $id
        ]));
    }

    public function destroy($id)
    {
        $category = (new CategoryRecord())->find($id);
        $category->delete();
        return $this->redirect($this->getUrl('admin.category.index'));
    }

    public function articles($alias)
    {
		$articles = (new ArticleRecord())->order('id desc')->eq('alias', $alias)->findAll();
        return $this->render('admin/category/view', [
            'articles' => $articles
        ]);
    }

}