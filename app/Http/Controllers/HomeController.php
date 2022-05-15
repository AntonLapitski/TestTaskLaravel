<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Models\Category;
use App\Models\News;
use App\View\Components\NewsComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();

        $news = News::all();

        return view('index', ['categories' => $categories, 'news' => $news]);
    }

    public function storeNotAsync(Request $request)
    {
        $heading = $request->get('heading');
        $anons = $request->get('anons');
        $text = $request->get('text');
        $newsItem = new News();
        $newsItem->heading = $heading;
        $newsItem->anons = $anons;
        $newsItem->text = $text;
        $newsItem->save();
        $categoriesIds = [];

        $one = $request->get('abcd');
        $two = $request->get('xyz');
        $three = $request->get('zxc');
        $four = $request->get('pop');

        if ($one && $two) {
            $categoriesIds[] = $two;

        } elseif ($one && !$two) {
            $categoriesIds[] = $one;
        }

        if ($three && $four) {
            $categoriesIds[] = $four;

        } elseif($three && !$four) {
            $categoriesIds[] = $three;
        }

        for ($i = 0; $i < count($categoriesIds); $i++) {
            DB::table('categoriesnews')->insert(
                [
                    'news_id' => $newsItem->id,
                    'category_id' => $categoriesIds[$i]
                ]
            );
        }
    }

    public function storeAsync(Request $request)
    {
        dispatch(new ProcessPodcast($request));
    }

    public function searchByWord(Request $request)
    {
        $word = $request->get('search');

        if ($word == '') {
            $news = News::all();
            $comp = new NewsComponent($news);

            return $comp->render();
        }

        $result = DB::table('news')
            ->select(DB::raw("*"))
            ->where('text', 'like', '%' . $word . '%')
            ->get();

        $comp = new NewsComponent($result);

        return $comp->render();
    }
}
