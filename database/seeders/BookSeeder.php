<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $book1 = new Book([
            "title" => "Visión Holística y Salud",
            "subtitle" => "Diccionario Biodescodificación",
            "link" => "https://drive.google.com/file/d/1Dbyx37ONbAAZXbMH-5kH1SC_rMwvUWPL/view?usp=drivesdk"
        ]);
        $book2 = new Book([
            "title" => "Conectarse A La Vida",
            "subtitle" => "Diccionario Biodescodificación",
            "link" => "https://drive.google.com/file/d/1Dbyx37ONbAAZXbMH-5kH1SC_rMwvUWPL/view?usp=drivesdk"
        ]);
        $book3 = new Book([
            "title" => "Visión Holística y Salud",
            "subtitle" => "Alimentación consciente",
            "link" => "https://drive.google.com/file/d/1B0N-MVqlp9nMlkhVCaaDtn2q16-FIAjr/view?usp=drivesdk"
        ]);
        $book4 = new Book([
            "title" => "Arte-terapia Holística: Mándalas para colorear",
            "subtitle" => "Diccionario Biodescodificación",
            "link" => "https://drive.google.com/file/d/1Dbyx37ONbAAZXbMH-5kH1SC_rMwvUWPL/view?usp=drivesdk"
        ]);
        $book1->save();
        $book2->save();
        $book3->save();
        $book4->save();
    }
}
