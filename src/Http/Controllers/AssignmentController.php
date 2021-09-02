<?php
namespace Kerisi\LaravelJoget\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AssignmentController extends Controller
{
    public function list(Request $request)
    {
        return "Welcome to Assigment - list";
    }

    public function pending(Request $request)
    {
        return "Welcome to Assigment - pending";
    }
}