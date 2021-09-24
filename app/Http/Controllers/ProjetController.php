<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index() {
        return 'Bonjour';
    }

    public function test($param) {
        return $param;
    }
}
