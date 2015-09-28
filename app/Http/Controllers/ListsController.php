<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lists;
use App\Items;

class ListsController extends Controller
{
    public function index()
    {
    	$lists = Lists::latest()->get();
    	return view('lists.index', compact('lists'));
    }

    public function show($id)
    {
    	$list = Lists::findOrFail($id);
    	$items = Items::where('list_id', '=', $id)->get();
    	return view('lists.show', compact('list','items'));
    }

    public function create()
    {
    	return view('lists.create');
    }

    public function store(Requests\ListsRequest $request)
    {
    	Lists::create($request->all());
    	return redirect('/');
    }

    public function edit($id)
    {
    	$list = Lists::findOrFail($id);
    	return view('lists.edit', compact('list'));
    }

    public function update($id, Requests\ListsRequest $request)
    {
    	$list = Lists::findOrFail($id);
    	$list->update($request->all());
    	return redirect('/');
    }
}
