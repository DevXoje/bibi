<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    public function run()
    {
        $book1 = new Book([
            "title" => "Visión Holística y Salud",
            "subtitle" => "Diccionario Biodescodificación",
            //"link" => "https://drive.google.com/file/d/1Dbyx37ONbAAZXbMH-5kH1SC_rMwvUWPL/view?usp=drivesdk",
            "link" => "pdf/Diccionario_biodescodificación.pdf",
            "slug" => Str::slug("Diccionario Biodescodificación"),
            "image" => "resources/images/Libros/Diccionario_biodescodificacion_thumbnail.PNG"
        ]);
        $book2 = new Book([
            "title" => "Conectarse A La Vida",
            "subtitle" => "Alimentación consciente",
            //"link" => "https://drive.google.com/file/d/1Dbyx37ONbAAZXbMH-5kH1SC_rMwvUWPL/view?usp=drivesdk",
            "link" => "pdf/Alimentacion_consciente.pdf",
            "slug" => Str::slug("Alimentación consciente"),
            "image" => "resources/images/Libros/Alimentacion_Consciente_thumbnail.PNG"

        ]);
        $book3 = new Book([
            "title" => "Arte-terapia Holistica",
            "subtitle" => "Mandalas para colorear 1",
            //"link" => "https://drive.google.com/file/d/1B0N-MVqlp9nMlkhVCaaDtn2q16-FIAjr/view?usp=drivesdk"
            "link" => "pdf/Mandalas.pdf",
            "slug" => Str::slug("Mandalas para colorear 1"),
            "image" => "resources/images/Libros/mandalas_pintar_1_thumbnail.PNG"

        ]);
        $book4 = new Book([
            "title" => "Arte-terapia Holistica",
            "subtitle" => "Mandalas para colorear 2",
            //"link" => "https://drive.google.com/file/d/1Dbyx37ONbAAZXbMH-5kH1SC_rMwvUWPL/view?usp=drivesdk"
            "link" => "pdf/Mandalas2.pdf",
            "slug" => Str::slug("Mandalas para colorear 2"),
            "image" => "resources/images/Libros/mandalas_pintar_2_thumbnail.PNG"

        ]);
        $book1->save();
        $book2->save();
        $book3->save();
        $book4->save();
    }
}
