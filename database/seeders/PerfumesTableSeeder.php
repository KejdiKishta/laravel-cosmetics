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
        // default products
        $perfumes = [
            ['name' => 'Chanel No. 5', 'description' => 'Un classico senza tempo.', 'price' => 120.00, 'brand' => 'Chanel', 'image' => 'https://fnf.co.ke/wp-content/uploads/Chanel-No.-5-Eau-de-Parfum-Spray-100ml.jpg'],
            ['name' => 'Dior Sauvage', 'description' => 'Audace e fresca.', 'price' => 95.50, 'brand' => 'Dior', 'image' => 'https://www.e-glamour.pl/data/cache/thumb_min500_max1000-min500_max1000-12/products/243860/1571813120/christian-dior-sauvage-perfumy-dla-mezczyzn-60-ml-291474.jpg'],
            ['name' => 'Acqua di Gio', 'description' => 'Essenza del mare.', 'price' => 80.00, 'brand' => 'Giorgio Armani', 'image' => 'https://brandedfragrance.com/wp-content/uploads/2021/06/Armani-Acqua-Di-Gio-Profumo-EDP-Men-75ml-1.jpg'],
            ['name' => 'Gucci Bloom', 'description' => 'Un giardino in fiore.', 'price' => 105.00, 'brand' => 'Gucci', 'image' => 'https://fraguru.com/himg/o.dUayqh0MpkE.jpg'],
            ['name' => 'Versace Eros', 'description' => 'Vibrante e passionale.', 'price' => 89.99, 'brand' => 'Versace', 'image' => 'https://s1.thcdn.com/productimg/1600/1600/11034083-3104533774594048.jpg'],
            ['name' => 'Tom Ford Noir', 'description' => 'Sofisticata e unica.', 'price' => 150.00, 'brand' => 'Tom Ford', 'image' => 'https://www.parfimo.ro/data/cache/thumb_min500_max1000-min500_max1000-12/products/96489/1568346504/tom-ford-noir-extreme-apa-de-parfum-pentru-barbati-100-ml-240379.jpg'],
            ['name' => 'Prada Luna Rossa', 'description' => 'Ispirata all’oceano.', 'price' => 110.00, 'brand' => 'Prada', 'image' => 'https://cdn.fragrancenet.com/images/photos/900x900/267838.jpg'],
            ['name' => 'YSL Black Opium', 'description' => 'Dolce e seducente.', 'price' => 99.90, 'brand' => 'Yves Saint Laurent', 'image' => 'https://www.yslbeauty.de/on/demandware.static/-/Sites-ysl-master-catalog/default/dwbaa599e1/Packshots/Fragrance/For-her/black-opium/WW-51036YSL/3614273863377_black-opium-le-parfum-50ml_main.png'],
            ['name' => 'Burberry Her', 'description' => 'Fruttato e floreale.', 'price' => 85.00, 'brand' => 'Burberry', 'image' => 'https://cdn.shopify.com/s/files/1/0844/2647/products/womens-fragrances-burberry-her-3-3-oz-edp-for-women-1_2400x.jpg?v=1570129322'],
            ['name' => 'Hugo Boss Bottled', 'description' => 'Calda e speziata.', 'price' => 75.00, 'brand' => 'Hugo Boss', 'image' => 'https://cdn.shopify.com/s/files/1/0259/7733/products/hugo_boss_bottled_night_1024x1024.jpg?v=1486515867'],
            ['name' => 'Dolce & Gabbana Light Blue', 'description' => 'Leggera e frizzante.', 'price' => 70.00, 'brand' => 'Dolce & Gabbana', 'image' => 'http://www.lodoro.cl/cdn/shop/products/perfume-dolce-gabbana-hombre-D_NQ_NP_745756-MCO25891572494_082017-F_149c83a4-7169-42bd-95be-7c50cf6bad86.jpg?v=1594604330'],
            ['name' => 'Paco Rabanne 1 Million', 'description' => 'Ricco e opulento.', 'price' => 90.00, 'brand' => 'Paco Rabanne', 'image' => 'https://cdn.shopify.com/s/files/1/0259/7733/products/paco-million-200ml_1024x1024.png?v=1544592588'],
            ['name' => 'Lancome La Vie Est Belle', 'description' => 'Elegante e dolce.', 'price' => 115.00, 'brand' => 'Lancome', 'image' => 'https://fimgs.net/mdimg/secundar/o.68518.jpg'],
            ['name' => 'Calvin Klein Euphoria', 'description' => 'Moderna e seducente.', 'price' => 65.00, 'brand' => 'Calvin Klein', 'image' => 'https://cdn.shopify.com/s/files/1/0019/3055/9551/products/473e69becb7027deed61397ef5f52438_original_530x@2x.jpg?v=1613418493'],
            ['name' => 'Jo Malone English Pear', 'description' => 'Fruttata e fresca.', 'price' => 125.00, 'brand' => 'Jo Malone', 'image' => 'https://down-th.img.susercontent.com/file/9b2e1e4b0aab138daa9922a699dbb701'],
            ['name' => 'Creed Aventus', 'description' => 'Iconica e potente.', 'price' => 250.00, 'brand' => 'Creed', 'image' => 'https://tprofumo.com/wp-content/uploads/2022/01/Creed-Aventus-2.jpeg'],
            ['name' => 'Armani Code', 'description' => 'Misteriosa e seducente.', 'price' => 85.00, 'brand' => 'Giorgio Armani', 'image' => 'https://i5.walmartimages.ca/images/Enlarge/004/056/999999-3360375004056.jpg'],
            ['name' => 'Chanel Coco Mademoiselle', 'description' => 'Elegante e femminile.', 'price' => 130.00, 'brand' => 'Chanel', 'image' => 'https://www.parfimo.bg/data/cache/thumb_min500_max1000-min500_max1000-12/products/949474/1564549565/chanel-coco-mademoiselle-intense-eau-de-parfum-za-zheni-200-ml-283089.jpg'],
            ['name' => 'Thierry Mugler Alien', 'description' => 'Esotica e audace.', 'price' => 110.00, 'brand' => 'Thierry Mugler', 'image' => 'https://www.beautyaz.gr/24666-thickbox_default/thierry-mugler-alien-eau-de-parfum-refillable-90ml.jpg'],
            ['name' => 'Jean Paul Gaultier Le Male', 'description' => 'Classico e speziato.', 'price' => 95.00, 'brand' => 'Jean Paul Gaultier', 'image' => 'https://cdn.shopify.com/s/files/1/0259/7733/products/jean_paul_le_male_75ml_1024x1024.jpg?v=1487205636'],
        ];

        // duplicate till we have 50 products
        while (count($perfumes) < 50) {
            $perfumes = array_merge($perfumes, $perfumes);
        }

        // add to db
        foreach ($perfumes as $perfume) {
            Perfume::create($perfume);
        }
    }
}
