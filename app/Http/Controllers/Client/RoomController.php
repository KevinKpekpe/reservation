<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $query = Room::query();

        // Filtrer par date d'arrivée et de départ
        if ($request->filled('date_arrive') && $request->filled('date_depart')) {
            $dateArrive = $request->input('date_arrive');
            $dateDepart = $request->input('date_depart');
            $query->whereDoesntHave('reservations', function($q) use ($dateArrive, $dateDepart) {
                $q->where(function($query) use ($dateArrive, $dateDepart) {
                    $query->whereBetween('date_arrive', [$dateArrive, $dateDepart])
                          ->orWhereBetween('date_depart', [$dateArrive, $dateDepart])
                          ->orWhere(function($query) use ($dateArrive, $dateDepart) {
                              $query->where('date_arrive', '<=', $dateArrive)
                                    ->where('date_depart', '>=', $dateDepart);
                          });
                });
            });
        }

        // Filtrer par catégorie
        if ($request->filled('category')) {
            $category = $request->input('category');
            $query->where('category_id', $category);
        }

        // Filtrer par nombre de personnes
        if ($request->filled('persons')) {
            $persons = $request->input('persons');
            $query->where('capacity', '>=', $persons);
        }

        $rooms = $query->get();

        return view('frontend.rooms.rooms', ['rooms' => $rooms]);
    }

    public function show(Room $room)
    {
        if ($room->exists) {
            return view('frontend.rooms.room', ['room' => $room]);
        } else {
            return abort(404);
        }
    }
}
