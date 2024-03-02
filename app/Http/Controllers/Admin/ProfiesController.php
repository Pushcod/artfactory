<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profi;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ProfiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.profis.index',[
            'profis' => SpladeTable::for(Profi::class)
                ->withGlobalSearch(columns:['title','description'])
                ->column('title',label: "Название услуги", sortable:true)
                ->column('description',label: "Описание услуги")
                ->column('image', label: "Изображение")
                ->column('price', label: "Цена")
                ->column('action',label: "Действие", canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profi = new Profi();
        $profi->title = $request->input('title');
        $profi->description = $request->input('description');
        $profi->isActive = $request->input('isActive');
        $profi->image = $request->file('image')->store('public/profis');
        $profi->save();
        Toast::title('Работа добавлена',);
        return redirect()->route('profis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profi $profi)
    {
        return view('admin.profis.edit', compact('profi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profi $profi)
    {
        $profi->title = $request->input('title');
        $profi->description = $request->input('description');
        $profi->isActive = $request->input('isActive');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/profis', $filename);
            $profi->image = $filename;
        }
        $profi->save();
        Toast::title('Работа добавлена',);
        return redirect()->route('profis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profi $profi)
    {
        $profi->delete();
        Toast::title('Работа удалена');
        return redirect()->route('profis.index');
    }
}
