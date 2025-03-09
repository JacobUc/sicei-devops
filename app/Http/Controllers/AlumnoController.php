<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    protected $alumnos = [
        [
            'nombre' => 'Jacob Uc',
            'matricula' => '17000923',
        ],
        [
            'nombre' => 'Alumno 2',
            'matricula' => '17301535',
        ],
        [
            'nombre' => 'Alumno 3',
            'matricula' => '18004082',
        ],
        [
            'nombre' => 'Alumno 4',
            'matricula' => '18006585',
        ],
        [
            'nombre' => 'Alumno 5',
            'matricula' => '18006755',
        ],
    ];

    public function index()
    {
        return response()->json($this->alumnos);
    }
}
