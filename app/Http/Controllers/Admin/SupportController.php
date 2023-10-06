<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin/supports/index', compact('supports'));
    }

    public function show(string|int $id)
    {
        if(!$support = Support::find($id))      /* Redireciona o usuário caso a variável support seja falsa */
        {
            return back();
        }
        return view('/admin/supports/show', compact('support'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support = $support->create($data);
        dd($support);
    }

    public function edit(Support $support, string|int $id)
    {
        if(!$support = $support->where('id', $id)->first())
        {
            return back();
        }

        return view('admin/supports/edit', compact('support'));
    }
}
