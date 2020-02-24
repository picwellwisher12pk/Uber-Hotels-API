<?php

use Illuminate\Database\Seeder;

class RealHotelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file made with iseed from https://github.com/orangehill/iseed
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hotels')->delete();
        
        \DB::table('hotels')->insert(array (
            0 => 
            array (
                'id' => 17,
                'name' => 'Ellswerth Cuttings',
                'email' => 'ecuttings0@cafepress.com',
                'phone' => '927-157-8145',
                'address' => '105 Kropf Avenue',
                'image' => 'https://images.pexels.com/photos/338504/pexels-photo-338504.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260',
                'longitude' => 74.4084733,
                'latitude' => 31.5689437,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 18,
                'name' => 'Wilton Bacchus',
                'email' => 'wbacchus1@ameblo.jp',
                'phone' => '822-299-5316',
                'address' => '5120 Schiller Crossing',
                'image' => 'https://images.pexels.com/photos/1458457/pexels-photo-1458457.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'longitude' => 74.3975118,
                'latitude' => 31.5565128,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 19,
                'name' => 'Moreen Autrie',
                'email' => 'mautrie2@businessinsider.com',
                'phone' => '233-261-4295',
                'address' => '360 Lakewood Circle',
                'image' => 'https://images.pexels.com/photos/1386168/pexels-photo-1386168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                'longitude' => 74.3993637,
                'latitude' => 31.5573682,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 20,
                'name' => 'Joane Clerke',
                'email' => 'jclerke3@about.me',
                'phone' => '854-315-8252',
                'address' => '84 Vahlen Pass',
                'image' => 'https://images.pexels.com/photos/2394446/pexels-photo-2394446.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'longitude' => 74.4017972,
                'latitude' => 31.5597671,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 21,
                'name' => 'Denice Mease',
                'email' => 'dmease4@elegantthemes.com',
                'phone' => '419-336-9413',
                'address' => '9293 Elgar Junction',
                'image' => 'https://images.pexels.com/photos/2540653/pexels-photo-2540653.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                'longitude' => 74.3945268,
                'latitude' => 31.5649515,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 22,
                'name' => 'Maximo Macieiczyk',
                'email' => 'mmacieiczyk5@stanford.edu',
                'phone' => '988-774-0374',
                'address' => '8122 Loeprich Lane',
                'image' => 'https://images.pexels.com/photos/3285716/pexels-photo-3285716.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'longitude' => 74.4040478,
                'latitude' => 31.5666545,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 23,
                'name' => 'Rhoda Spittal',
                'email' => 'rspittal6@live.com',
                'phone' => '525-639-9885',
                'address' => '450 Farmco Crossing',
                'image' => 'https://images.pexels.com/photos/3075763/pexels-photo-3075763.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                'longitude' => 74.4031113,
                'latitude' => 31.5670675,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 24,
                'name' => 'Jerad Angliss',
                'email' => 'jangliss7@cocolog-nifty.com',
                'phone' => '180-109-8288',
                'address' => '1470 Barnett Road',
                'image' => 'https://images.pexels.com/photos/2867903/pexels-photo-2867903.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'longitude' => 74.3923061,
                'latitude' => 31.5684959,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 25,
                'name' => 'Polly Emblin',
                'email' => 'pemblin8@omniture.com',
                'phone' => '273-767-5415',
                'address' => '5053 Jenna Trail',
                'image' => 'https://images.pexels.com/photos/1135380/pexels-photo-1135380.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                'longitude' => 74.398497,
                'latitude' => 31.5698297,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 26,
                'name' => 'Avis Metzig',
                'email' => 'ametzig9@webs.com',
                'phone' => '928-979-1982',
                'address' => '5609 Merchant Drive',
                'image' => 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                'longitude' => 74.4065071,
                'latitude' => 31.5674701,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 27,
                'name' => 'Reed Sawdon',
                'email' => 'rsawdona@vinaora.com',
                'phone' => '595-196-9096',
                'address' => '33 Quincy Court',
                'image' => 'http://dummyimage.com/381x302.jpg/ff4444/ffffff',
                'longitude' => 74.408151,
                'latitude' => 31.5641786,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 28,
                'name' => 'Imogen Drinnan',
                'email' => 'idrinnanb@who.int',
                'phone' => '964-942-4423',
                'address' => '185 Drewry Circle',
                'image' => 'http://dummyimage.com/354x400.jpg/dddddd/000000',
                'longitude' => 74.4025463,
                'latitude' => 31.473741,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 29,
                'name' => 'Larisa Elmar',
                'email' => 'lelmarc@free.fr',
                'phone' => '421-960-2362',
                'address' => '5981 4th Place',
                'image' => 'http://dummyimage.com/323x369.jpg/5fa2dd/ffffff',
                'longitude' => 74.4021603,
                'latitude' => 31.4738106,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 30,
                'name' => 'Filberte Blaydon',
                'email' => 'fblaydond@pagesperso-orange.fr',
                'phone' => '137-105-9645',
                'address' => '0 Lukken Drive',
                'image' => 'http://dummyimage.com/349x360.jpg/cc0000/ffffff',
                'longitude' => 74.4016828,
                'latitude' => 31.4735766,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 31,
                'name' => 'Felisha Siggins',
                'email' => 'fsigginse@hatena.ne.jp',
                'phone' => '734-141-5835',
                'address' => '7887 Ludington Alley',
                'image' => 'http://dummyimage.com/305x368.jpg/cc0000/ffffff',
                'longitude' => 74.4012708,
                'latitude' => 31.4743586,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}