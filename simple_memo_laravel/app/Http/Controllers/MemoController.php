<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * 初期表示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('memo');
    }

     /**
     * メモの追加
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add()
    {
        Memo::create([
            'user_id' => Auth::id(),
            'title' => '新規メモ',
            'content' => '',
        ]);

        return redirect()->route('memo.index');
    }
}
