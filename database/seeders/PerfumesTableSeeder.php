<?php

namespace Database\Seeders;

use App\Models\Perfume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perfumes = [
            ['name' => 'Chanel No. 5', 'description' => 'Un classico senza tempo.', 'price' => 120.00, 'brand' => 'Chanel', 'image' => 'https://via.placeholder.com/640x480?text=Chanel+No.+5'],
            ['name' => 'Dior Sauvage', 'description' => 'Audace e fresca.', 'price' => 95.50, 'brand' => 'Dior', 'image' => 'https://via.placeholder.com/640x480?text=Dior+Sauvage'],
            ['name' => 'Acqua di Gio', 'description' => 'Essenza del mare.', 'price' => 80.00, 'brand' => 'Giorgio Armani', 'image' => 'https://via.placeholder.com/640x480?text=Acqua+di+Gio'],
            ['name' => 'Gucci Bloom', 'description' => 'Un giardino in fiore.', 'price' => 105.00, 'brand' => 'Gucci', 'image' => 'https://via.placeholder.com/640x480?text=Gucci+Bloom'],
            ['name' => 'Versace Eros', 'description' => 'Vibrante e passionale.', 'price' => 89.99, 'brand' => 'Versace', 'image' => 'https://via.placeholder.com/640x480?text=Versace+Eros'],
            ['name' => 'Tom Ford Noir', 'description' => 'Sofisticata e unica.', 'price' => 150.00, 'brand' => 'Tom Ford', 'image' => 'https://via.placeholder.com/640x480?text=Tom+Ford+Noir'],
            ['name' => 'Prada Luna Rossa', 'description' => 'Ispirata all’oceano.', 'price' => 110.00, 'brand' => 'Prada', 'image' => 'https://via.placeholder.com/640x480?text=Prada+Luna+Rossa'],
            ['name' => 'YSL Black Opium', 'description' => 'Dolce e seducente.', 'price' => 99.90, 'brand' => 'Yves Saint Laurent', 'image' => 'https://via.placeholder.com/640x480?text=YSL+Black+Opium'],
            ['name' => 'Burberry Her', 'description' => 'Fruttato e floreale.', 'price' => 85.00, 'brand' => 'Burberry', 'image' => 'https://via.placeholder.com/640x480?text=Burberry+Her'],
            ['name' => 'Hugo Boss Bottled', 'description' => 'Calda e speziata.', 'price' => 75.00, 'brand' => 'Hugo Boss', 'image' => 'https://via.placeholder.com/640x480?text=Hugo+Boss+Bottled'],
            ['name' => 'Dolce & Gabbana Light Blue', 'description' => 'Leggera e frizzante.', 'price' => 70.00, 'brand' => 'Dolce & Gabbana', 'image' => 'https://via.placeholder.com/640x480?text=Light+Blue'],
            ['name' => 'Paco Rabanne 1 Million', 'description' => 'Ricco e opulento.', 'price' => 90.00, 'brand' => 'Paco Rabanne', 'image' => 'https://via.placeholder.com/640x480?text=1+Million'],
            ['name' => 'Lancome La Vie Est Belle', 'description' => 'Elegante e dolce.', 'price' => 115.00, 'brand' => 'Lancome', 'image' => 'https://via.placeholder.com/640x480?text=La+Vie+Est+Belle'],
            ['name' => 'Calvin Klein Euphoria', 'description' => 'Moderna e seducente.', 'price' => 65.00, 'brand' => 'Calvin Klein', 'image' => 'https://via.placeholder.com/640x480?text=Euphoria'],
            ['name' => 'Jo Malone English Pear', 'description' => 'Fruttata e fresca.', 'price' => 125.00, 'brand' => 'Jo Malone', 'image' => 'https://via.placeholder.com/640x480?text=English+Pear'],
            ['name' => 'Creed Aventus', 'description' => 'Iconica e potente.', 'price' => 250.00, 'brand' => 'Creed', 'image' => 'https://via.placeholder.com/640x480?text=Aventus'],
            ['name' => 'Armani Code', 'description' => 'Misteriosa e seducente.', 'price' => 85.00, 'brand' => 'Giorgio Armani', 'image' => 'https://via.placeholder.com/640x480?text=Armani+Code'],
            ['name' => 'Chanel Coco Mademoiselle', 'description' => 'Elegante e femminile.', 'price' => 130.00, 'brand' => 'Chanel', 'image' => 'https://via.placeholder.com/640x480?text=Coco+Mademoiselle'],
            ['name' => 'Thierry Mugler Alien', 'description' => 'Esotica e audace.', 'price' => 110.00, 'brand' => 'Thierry Mugler', 'image' => 'https://via.placeholder.com/640x480?text=Alien'],
            ['name' => 'Jean Paul Gaultier Le Male', 'description' => 'Classico e speziato.', 'price' => 95.00, 'brand' => 'Jean Paul Gaultier', 'image' => 'https://via.placeholder.com/640x480?text=Le+Male'],
            // Aggiungi altre righe seguendo lo stesso schema...
        ];

        // Duplicare i profumi per raggiungere i 50 prodotti
        while (count($perfumes) < 50) {
            $perfumes = array_merge($perfumes, $perfumes);
        }
        
        // Limitare a 50 esatti
        $perfumes = array_slice($perfumes, 0, 50);

        // Inserire i profumi nel database
        foreach ($perfumes as $perfume) {
            Perfume::create($perfume);
        }
    }
}
