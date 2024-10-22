<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function update(ItemRequest $request, Item $item)
    {
        
        $image = $request->file('image');
        
        $path = $item->image;
        if (isset($image)) {
            
            \Storage::disk('public')->delete($path);
            
            $path = $image->store('items', 'public');
        }
        
        $item->update([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $path,
        ]);

        return redirect()->route('items.edit', $item);
    }
}