<?php

namespace app\controllers;

use app\records\ArticleRecord;
use app\records\CategoryRecord;
use Flight;

class ArticleController extends BaseController
{

	public function index()
	{
		$articles = (new ArticleRecord())->select("articles.*,categories.title as category")
		->join('categories','articles.aliasId = categories.id')
		->orderBy('articles.id desc')->findAll();

        return $this->render('admin/articles/index', [
            'articles' => $articles
        ]);
	}

	public function create()
	{
        return $this->render('admin/articles/form');
	}

	public function store()
	{
		$article = new ArticleRecord();
		$request = $this->request();
		$data = $request->data;
		$article->aliasId = $data->aliasId;
		$alias = (new CategoryRecord())->find($data->aliasId);
		$article->alias = $alias->slug;
		$article->name = $data->name;
		$article->{"`desc`"} = $data->description;
		$article->pic = uploadFile($request->files['thumbnail']);
		$article->date = date("Y-m-d");
		$article->insert();

		return $this->redirect("/admin/articles");
	}

	public function edit($id)
	{
        $article = (new ArticleRecord())->find($id);

        return $this->render('admin/articles/form', [
            'article' => $article
        ]);
	}

	public function update($id)
	{
        $article = (new ArticleRecord())->find($id);
		$request = $this->request();
		$data = $request->data;
		$article->aliasId = $data->aliasId;
		$alias = (new CategoryRecord())->find($data->aliasId);
		$article->alias = $alias->slug;
		$article->name = $data->name;
		$article->{"`desc`"} = $data->description;
		if(!empty($request->files['thumbnail']['full_path'])){
			$article->pic = uploadFile($request->files['thumbnail']);
		}
		$article->update();

		return $this->redirect('/admin/articles/edit/'. $id);
	}

	public function destroy($id)
	{
        $article = (new ArticleRecord())->find($id);
        $article->delete();
        return $this->redirect('/admin/articles');
	}
}