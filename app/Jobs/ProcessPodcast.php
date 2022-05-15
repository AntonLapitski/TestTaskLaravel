<?php

namespace App\Jobs;

use App\Models\News;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $fields;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->fields = $request->all();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->fields;
        $heading = $data['heading'];;
        $anons = $data['anons'];
        $text = $data['text'];
        $newsItem = new News();
        $newsItem->heading = $heading;
        $newsItem->anons = $anons;
        $newsItem->text = $text;
        $newsItem->save();

        $one = $data('abcd');
        $two = $data('xyz');
        $three = $data('zxc');
        $four = $data('pop');
        $categoriesIds = [];

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
}
