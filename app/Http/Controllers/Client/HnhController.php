<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hnh;
use App\Models\HnhFeature;
use App\Models\ProductFeature;
use Illuminate\Http\Request;

class HnhController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $answers = HnhFeature::select("answers")->get();
        $answersList = [];
        foreach ($answers as $answer){
            $answersList = array_merge($answersList, $answer->answers);
        }
//        dd($answersList);

        return view('client.pages.hnh.index', [
            'hnhs' => Hnh::orderBy('created_at', 'desc')->where(['status' => 1])->with('features')->paginate(6),
            "answersList" => $answersList
        ]);
    }
}
