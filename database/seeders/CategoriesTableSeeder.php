<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Adana' , 'slug'=>'Adana']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Adıyaman' , 'slug'=>'Adıyaman']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Afyon' , 'slug'=>'Afyon']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Ağrı' , 'slug'=>'Ağrı']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Aksaray' , 'slug'=>'Aksaray']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Amasya' , 'slug'=>'Amasya']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Ankara' , 'slug'=>'Ankara']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Antalya' , 'slug'=>'Antalya']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Ardahan' , 'slug'=>'Ardahan']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Artvin' , 'slug'=>'Artvin']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Aydın' , 'slug'=>'Aydın']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Balıkkesir' , 'slug'=>'Balıkkesir']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Bartın' , 'slug'=>'Bartın']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Batman' , 'slug'=>'Batman']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Bayburt' , 'slug'=>'Bayburt']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Bilecik' , 'slug'=>'Bilecik']);       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Bingöl' , 'slug'=>'Bingöl']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Bitlis' , 'slug'=>'Bitlis']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Bolu' , 'slug'=>'Bolu']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Burdur' , 'slug'=>'Burdur']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Bursa' , 'slug'=>'Bursa']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Çanakkale' , 'slug'=>'Çanakkale']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Çankırı' , 'slug'=>'Çankırı']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Çorum' , 'slug'=>'Çorum']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Denizli' , 'slug'=>'Denizli']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Diyarbakır' , 'slug'=>'Diyarbakır']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Düzce' , 'slug'=>'Düzce']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Edirne' , 'slug'=>'Edirne']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Elazığ' , 'slug'=>'Elazığ']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Erzurum' , 'slug'=>'Erzurum']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Eskişehir' , 'slug'=>'Eskişehir']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Gaziantep' , 'slug'=>'Gaziantep']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Giresun' , 'slug'=>'Giresun']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Gümüşhane' , 'slug'=>'Gümüşhane']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Hakkari' , 'slug'=>'Hakkari']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Hatay' , 'slug'=>'Hatay']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Isparta' , 'slug'=>'Isparta']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Mersin' , 'slug'=>'Mersin']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Iğdır' , 'slug'=>'Iğdır']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'İstanbul' , 'slug'=>'İstanbul']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'İzmir' , 'slug'=>'İzmir']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kars' , 'slug'=>'Kars']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Karaman' , 'slug'=>'Karaman']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kastamonu' , 'slug'=>'Kastamonu']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kayseri' , 'slug'=>'Kayseri']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kırıkkale' , 'slug'=>'Kırıkkale']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kırklareli' , 'slug'=>'Kırklareli']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kırşehir' , 'slug'=>'Kırşehir']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kilis' , 'slug'=>'Kilis']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kocaeli' , 'slug'=>'Kocaeli']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Konya' , 'slug'=>'Konya']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kütahya' , 'slug'=>'Kütahya']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Malatya' , 'slug'=>'Malatya']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Manisa' , 'slug'=>'Manisa']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Kahramanmaraş' , 'slug'=>'Kahramanmaraş']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Karabük' , 'slug'=>'Karabük']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Mardin' , 'slug'=>'Mardin']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Muğla' , 'slug'=>'Muğla']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Muş' , 'slug'=>'Muş']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Nevşehir' , 'slug'=>'Nevşehir']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Niğde' , 'slug'=>'Niğde']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Osmaniye' , 'slug'=>'Osmaniye']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Ordu' , 'slug'=>'Ordu']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Rize' , 'slug'=>'Rize']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Sakarya' , 'slug'=>'Sakarya']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Samsun' , 'slug'=>'Samsun']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Siirt' , 'slug'=>'Siirt']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Sinop' , 'slug'=>'Sinop']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Sivas' , 'slug'=>'Sivas']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Şanlıurfa' , 'slug'=>'Şanlıurfa']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Şırnak' , 'slug'=>'Şırnak']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Tekirdağ' , 'slug'=>'Tekirdağ']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Tokat' , 'slug'=>'Tokat']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Trabzon' , 'slug'=>'Trabzon']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Tunceli' , 'slug'=>'Tunceli']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Uşak' , 'slug'=>'Uşak']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Yalova' , 'slug'=>'Yalova']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Van' , 'slug'=>'Van']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);

       $id=DB::table('categories')->insertGetId(['categoryName'=>'Zonguldak' , 'slug'=>'Zonguldak']);
       DB::table('categories')->insert(['categoryName'=>'Çorba' , 'slug'=>'Çorba' ,'top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Et Yemeği' , 'slug'=>'Et Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Tavuk Yemeği' , 'slug'=>'Tavuk Yemeği','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sulu Yemek' , 'slug'=>'Sulu Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Sebzeli Yemek' , 'slug'=>'Sebzeli Yemek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Pilav' , 'slug'=>'Pilav','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Salata' , 'slug'=>'Salata','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Ekmek' , 'slug'=>'Ekmek','top_id'=>$id]);
       DB::table('categories')->insert(['categoryName'=>'Hamur İşi' , 'slug'=>'Hamur İşi','top_id'=>$id]);
       DB::table('categories')->insert( ['categoryName'=>'Kahvaltılık' , 'slug'=>'Kahvaltılık','top_id'=>$id]);


    }
}
