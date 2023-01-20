<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
  public function index()
  {
    $articles = Article::all();
    return view('articles', compact('articles'));
    // $articles = Article::where('image', null)->get();
    // $article = $articles->find(1);
    // foreach ($articles as $article) {
    //   dump($article->title);
    // }
    // $title = $article->title;
    // $content = $article->content;

    // dd('end');

    // dd($title, $content);
    // dd($articles);
        // $str = 'some';
        // dd($str);
        // return $str;
  }

  public function create()
  {
    $articlesArr = [
      [
        'title' => 'Breaking News!!!!',
        'content' => 'Fantstic News for anybody',
      ],
      [
        'title' => 'Breaking News part 2',
        'content' => 'Fantstic News for anybody or everbody',
      ]
    ];

    foreach ($articlesArr as $article) {
      Article::create([
        'title' => $article['title'],
        'content' => $article['content'],
      ]);
      dump('created');
    }

    // Article::create(
    //   [
    //     'title' => 'Breaking News part 2',
    //     'content' => 'Fantstic News for anybody or everbody',
    //     'image' => 'imagination2.img'
    //   ]
    // );

    // dd('created');
  }

  public function update()
  {
    // $articles = Article::where('title', 'Breaking News!!!!')->get();
    // foreach ($articles as $article)
    // {
    //   $article->update([
    //     'info' => 'useless column'
    //   ]);
    // }
    $article = Article::find(6);
    $article->update([
      'title'=>'updated title'
    ]);
    dd('updated');
  }

  public function delete()
  {
    $articles = Article::where('title', 'Breaking News part 2')->get();
    foreach ($articles as $article) {
      $article->delete();
      dump('deleted');
    }
    dd('finished');

  }

  // public function restore()
  // {
  //   $articles = Article::withTrashed()->where('title', 'Breaking News part 2')->get();
  //   foreach ($articles as $article) {
  //     $article->restore();
  //     dump('restored');
  //   }
  //   dd('finished');

  // }

  public function firstOrCreate()
  {
    $article = Article::find(1);

    $anotherArticle = [
      'title' => 'Breaking News part 3',
      'content' => 'Wow!!!',
      'image' => 'imagination3333.img'
    ];

    $article = Article::firstOrCreate(
      [
        'title' => 'Breaking News part 3'
      ],
      [
        'title' => 'Breaking News part 3',
        'content' => 'Not very Wow!!!',
        'image' => 'imagination3333.img'
      ]);
    dump($article->content);
    dd('finished');
  }

  public function updateOrCreate()
  {
    // $article = Article::find(1);

    $anotherArticle = [
      'title' => 'Breaking News part 3',
      'content' => 'Wow!!!',
      'image' => 'imagination3333.img'
    ];

    $article = Article::updateOrCreate(
      [
        'title' => 'Breaking News part 5'
      ],
      [
        'title' => 'Breaking News part 4',
        'content' => 'Secret Wow!!!',
        'image' => 'imagination33233.img'
      ]);
    dump($article->content);
    dd('finished');
  }
}
