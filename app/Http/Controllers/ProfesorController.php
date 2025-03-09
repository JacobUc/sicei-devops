<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    protected $profesores = [
        [
            'nombre' => 'Eduardo Rodriguez',
            'numeroEmpleado' => 'P001',
        ],
        [
            'nombre' => 'Profesor 2',
            'numeroEmpleado' => 'P002',
        ],
        [
            'nombre' => 'Profesor 3',
            'numeroEmpleado' => 'P003',
        ],
        [
            'nombre' => 'Profesor 4',
            'numeroEmpleado' => 'P004',
        ],
        [
            'nombre' => 'Profesor 5',
            'numeroEmpleado' => 'P005',
        ],
    ];

    public function index()
    {
        return response()->json($this->profesores);
    }
}
