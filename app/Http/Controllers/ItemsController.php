<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lists;
use App\Items;
use App\Comments;

class ItemsController extends Controller
{
    public function create($id)
    {
        $list = Lists::findOrFail($id);
        return view('items.create', compact('list'));
    }

    public function store($id, Requests\ItemsRequest $request)
    {
        Items::create($request->all());
        return redirect('/lists/' . $id);
    }

    public function show($lid, $iid)
    {
        $item = Items::findOrFail($iid);
        $comments = Comments::where('item_id', '=', $iid)->get();
        return view('items.show', compact('item','comments'));
    }

    public function edit($lid, $iid)
    {
        $list = Lists::findOrFail($lid);
        $item = Items::findOrFail($iid);
        return view('items.edit', compact('list','item'));
    }

    public function update($lid, $iid, Requests\ItemsRequest $request)
    {
        $item = Items::findOrFail($iid);
        $item->update($request->all());
        return redirect('/lists/' . $lid);
    }
}
