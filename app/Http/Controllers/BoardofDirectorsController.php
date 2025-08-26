<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardofDirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = [
            (object)[
                'img' => 'assets/Dr. Raul L. Lapitan MD.png',
                'name' => 'Raul L. Lapitan, MD',
                'position' => 'President',
                'position2' => '',
                'institution' => 'Example Institution',
                'bio' => 'A senior leader in cardio-oncology, Dr. Lapitan brings decades of clinical and academic experience to guide the society in its mission to protect the hearts of cancer patients through integrated, multidisciplinary care.',
            ],
            (object)[
                'img' => 'assets/Dr. Maria Katrina Tan, MD.png',
                'name' => 'Maria Katrina C. Tan, MD',
                'position' => 'Vice President / Co-Executive Director',
                'position2' => 'Overall Chair, Working Groups and Committees',
                'institution' => 'Example Institution',
                'bio' => 'A dedicated internist and cardio-oncology advocate, Dr. Tan champions collaboration and innovation in bridging disciplines for patient-centered strategies.',
            ],
            (object)[
                'img' => 'assets/Dr. Krizel Ozaeta-Lorilla, MD.png',
                'name' => 'Maria Kristina Cecilla P. Ozaeta-Lorilla, MD',
                'position' => 'Treasurer / Chair, Finance and Audit Committee',
                'position2' => '',
                'institution' => 'Example Institution',
                'bio' => 'Dr. Ozaeta-Lorilla plays a central role in academic dissemination and scientific programming, helping set the national tone for cardio-oncology education.',
            ],
            (object)[
                'img' => 'assets/Dr. Frances C. Carandang, MD.png',
                'name' => 'Frances C. Carandang, MD',
                'position' => 'Treasurer / Chair, Finance and Audit Committee',
                'position2' => '',
                'institution' => 'Example Institution',
                'bio' => 'With strong commitment to ethical and sustainable financial management, Dr. Carandang
                ensures the society remains accountable and future-ready.',
            ],
            (object)[
                'img' => 'assets/Dr. Aileen Simon, MD.png',
                'name' => 'Fe Aileen A. Simon, MD',
                'position' => 'Treasurer / Chair, Finance and Audit Committee',
                'position2' => '',
                'institution' => 'Example Institution',
                'bio' => 'Dr. Simon curates the scientific content of the society’s flagship events, fostering evidence-based practice and continuing education.',
            ],
            (object)[
                'img' => 'assets/Dr. Renato Ong, MD.png',
                'name' => 'Renato C. Ong JR., MD',
                'position' => 'Public Relations Officer / Co-Executive Director',
                'position2' => 'Chair, Research Committee',
                'institution' => 'Example Institution',
                'bio' => 'An advocate of locally relevant research, Dr. Ong leads initiatives to generate Filipino-centered cardio-oncology data and increase public engagement.',
            ],
            (object)[
                'img' => 'assets/Dr. Kathleen Joyce Ozaeta, MD.png',
                'name' => 'Kathleen Joyce R. Ozaeta, MD',
                'position' => 'Board of Director / Chair, Education and Training Committee',
                'position2' => '',
                'institution' => 'Example Institution',
                'bio' => 'Focused on capacity building, Dr. Ozaeta spearheads programs that upskill Filipino clinicians in cardio-oncology best practices.',
            ],
            (object)[
                'img' => 'assets/Dr. Joseph Cuaresma, MD.png',
                'name' => 'Joseph Raymond M. Cuaresma, MD',
                'position' => 'Board of Director / Chair, Advocacy and Public Health Awareness Committee',
                'position2' => '',
                'institution' => 'Example Institution',
                'bio' => 'A committed public health leader, Dr. Cuaresma drives national efforts to raise awareness on the intersection of cancer and cardiovascular disease.',
            ],
        ];

        return view('pages.about.about_bod', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
