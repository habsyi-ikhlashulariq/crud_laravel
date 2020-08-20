<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile()
    {
        $nama = 'Habsyi';
        $materi = ['HTML, CSS Dan Js','PHP','Laravel'];

       return view('profile', [
            'nama' => $nama,
            'materi' => $materi
       ]);
    }
    public function course()
    {
        $course = \App\Course::all();
        return view('course.index', [
            'course' => $course
            ]);
    }
}
