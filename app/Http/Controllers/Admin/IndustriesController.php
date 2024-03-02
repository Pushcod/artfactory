<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class IndustriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.indusrties.index',[
            'indusrties' => SpladeTable::for(Industry::class)
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
        return view('admin.indusrties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $industry = new Industry();
        $industry->title = $request->input('title');
        $industry->description = $request->input('description');
        $industry->back_img = $request->file('back_img')->store('public/industries');
        $industry->isActive = $request->input('isActive');
        $industry->image = $request->file('image')->store('public/industries');
        $industry->save();
        Toast::title('dadadadad');
        return redirect()->route('indusrties.index');
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
    public function edit(Industry $industry)
    {
        return view('admin.indusrties.edit', compact('industry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Industry $industry)
    {

        $industry->title = $request->input('title');
        $industry->description = $request->input('description');
        $industry->isActive = $request->input('isActive');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/industries', $filename);
            $industry->image = $filename;
        }
        if($request->hasFile('back_img')){
            $back_img = $request->file('back_img');
            $filenames = $back_img->getClientOriginalName();
            $back_img->storeAs('public/industries', $filenames);
            $industry->back_img = $filenames;
        }
        $industry->save();
        Toast::title('Работа добавлена',);
        return redirect()->route('indusrties.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industry $industry)
    {
        $industry->delete();
        Toast::title('Работа удалена');
        return redirect()->route('indusrties.index');
    }
}
