<?php

// app/Http/Controllers/PlanetController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use Illuminate\Support\Facades\DB;

class CreatePlanetController extends Controller
{

    public function index()
    {
        $planets = Planet::all();
        return view('planets', ['planeten' => $planets]);
    }

    public function show($planetName)
    {
        $planet = Planet::Where('name', $planetName)->first();


        return view('planet', ['planet' => $planet]);
    }
}
?>