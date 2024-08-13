<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Paiement;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe\Climate\Order;

class HomeController extends Controller
{
    public function index()
    {

        $totalOrders = Reservation::count();


        $totalCustomers = User::count();


        $totalSales = Paiement::sum('amount');


        return view('admin.index', compact('totalOrders', 'totalCustomers', 'totalSales'));
    }
}
