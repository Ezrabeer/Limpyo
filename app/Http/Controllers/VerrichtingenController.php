<?php

namespace App\Http\Controllers;

use App\Klant;
use App\Verrichting;
use Illuminate\Http\Request;

class VerrichtingenController extends Controller
{
    /**
     * @var Verrichting $verrichtingen
     */
    private $verrichtingen;

    /**
     * @var Klant $klanten
     */
    private $klanten;

    public function __construct(Verrichting $verrichting, Klant $klanten)
    {
        $this->verrichtingen = $verrichting;
        $this->klanten = $klanten;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verrichtingen = $this->verrichtingen->where('Factuur', null)->paginate(10);

        return view('verrichtingen.index', [
            'verrichtingen' => $verrichtingen,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $klanten = $this->klanten->where('Actief', 1)->get();

        return view('verrichtingen.create', [
            'klanten' => $klanten,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function show(Request $request, $id)
    {
        if ($request->ajax()) {

            $klant = $this->klanten->find($id)->NormMinuten;

            return response($klant);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
