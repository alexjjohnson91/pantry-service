<?php

namespace App\Http\Controllers;

use App\Models\PantryItem;
use Illuminate\Http\Request;

class PantryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PantryItem::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'unit' => 'required|string',
            'expires_at' => 'required|date',
        ]);

        $item = PantryItem::create($validated);

        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(PantryItem $pantryItem)
    {
        return $pantryItem;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PantryItem $pantryItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PantryItem $pantryItem)
    {
        $validated = $request->validate([
            'name' => 'string',
            'quantity' => 'integer',
            'unit' => 'string',
            'expires_at' => 'date',
        ]);

        $pantryItem->update($validated);

        return response()->json($pantryItem);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PantryItem $pantryItem)
    {
        $pantryItem->delete();

        return response()->json(null, 204);
    }
}
