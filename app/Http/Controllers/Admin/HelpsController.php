<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Help;
use App\Models\Setting;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class HelpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.helps.index',[

                'helps' => SpladeTable::for(Help::class)
                    ->withGlobalSearch(columns:['title','description'])
                    ->column('name', label: "Имя")
                    ->column('title',label: "Название услуги", sortable:true)
                    ->column('description',label: "Описание услуги")
                    ->column('title_two',label: "Название услуги", sortable:true)
                    ->column('description_two',label: "Описание услуги")

                    ->paginate(10)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.helps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|text',
            'title_two' => 'required|string',
            'description_two' => 'required|text',

        ]);


        $company = Help::findOrNew(1); //Укажем, что должна выбираться запись из модели Setting id которой равен = 1
        $company->fill($validatedData); //Заполняем поля


        $company->save();

        return redirect()->route('helps.index', $company->id)
            ->with('success', 'Company information updated successfully.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Help $help)
    {
        $help->delete();
        Toast::title('Работа удалена');
        return redirect()->route('helps.index');
    }
}
