<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Option;
use App\Models\Picture;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('pictures', 'category', 'options')->get();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function create()
    {
        $room = new Room();
        $categories = Category::all();
        $options = Option::all();
        return view('admin.rooms.form', compact('room', 'categories', 'options'));
    }

    public function store(Request $request)
    {
        $this->validateRoom($request);

        DB::transaction(function () use ($request) {
            $room = Room::create($request->except('images', 'options'));

            $this->handleOptions($room, $request);
            $this->handleImages($room, $request);
        });

        return redirect()->route('admin.rooms.index')->with('success', 'Chambre créée avec succès.');
    }

    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    public function edit(Room $room)
    {
        $categories = Category::all();
        $options = Option::all();
        return view('admin.rooms.form', compact('room', 'categories', 'options'));
    }

    public function update(Request $request, Room $room)
    {
        $this->validateRoom($request, $room->id);

        DB::transaction(function () use ($request, $room) {
            $room->update($request->except('options', 'images'));

            $this->handleOptions($room, $request);
            $this->handleImages($room, $request);
        });

        return redirect()->route('admin.rooms.index')->with('success', 'Chambre mise à jour avec succès.');
    }

    public function destroy(Room $room)
    {
        DB::transaction(function () use ($room) {
            foreach ($room->pictures as $picture) {
                Storage::disk('public')->delete($picture->image);
            }
            $room->options()->detach();
            $room->delete();
        });

        return redirect()->route('admin.rooms.index')->with('success', 'Chambre supprimée avec succès.');
    }

    private function validateRoom(Request $request, $roomId = null)
    {
        $request->validate([
            'code' => 'required|unique:rooms,code,' . $roomId,
            'description' => 'required',
            'prix' => 'required|integer',
            'numero_chambre' => 'required',
            'nombre_de_personne' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'options' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }

    private function handleOptions(Room $room, Request $request)
    {
        if ($request->has('options')) {
            $room->options()->sync($request->options);
        } else {
            $room->options()->detach();
        }
    }

    private function handleImages(Room $room, Request $request)
    {
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('room_images', 'public');
                $room->pictures()->create(['image' => $path]);
            }
        }
    }

    public function deletePhoto(Picture $picture)
    {
        Storage::disk('public')->delete($picture->image);
        $picture->delete();

        return back()->with('success', 'Photo supprimée avec succès.');
    }
}
