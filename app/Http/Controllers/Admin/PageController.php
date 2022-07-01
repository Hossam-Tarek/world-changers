<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Models\Page;
use App\Traits\FileTrait;

class PageController extends Controller
{
    use FileTrait;

    public function index()
    {
        return view('admin.pages.index', [
            'pages' => Page::all(),
        ]);
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(PageRequest $request, Page $page)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            self::deleteFile($page->image);
            $data['image'] = self::uploadFile($request->file('image'), 'pages/');
        }
        $page->update($data);
        toast(trans('admin.page').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return redirect()->route('admin.pages.index');
    }
}
