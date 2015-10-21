<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('loremipsum');
    }

    public function postIndex(Request $request)
    {
        $this->validate(
            $request, 
            ['paragraphs' => 'required|numeric|min:1|max:12']
        );

        $numParas = $request->input('paragraphs');
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numParas);

        return view('loremipsum')->with('paragraphs', $paragraphs)->with('numParas', $numParas);
    }

}
