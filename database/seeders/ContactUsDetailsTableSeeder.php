<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUsDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_us_details')->insert([
            'location' => 'Kathmandu',
            'email' => 'superadmin@pndc.com',
            'contact' => '9861723432 / 011680716',
            'google_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.980773330211!2d85.316569!3d27.686692!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe924ef110b00afcb!2sPeace%20Nepal%20DOT%20Com%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1638112422494!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'
        ]);
    }
}
