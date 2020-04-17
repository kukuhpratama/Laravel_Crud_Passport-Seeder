<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'employee_name' => 'Farhan',
                'employee_salary' => 200000,
                'employee_age' => 25,
                'profile_image' => 'ikan.jpg',
            ),
            1 => 
            array (
                'id' => 3,
                'employee_name' => 'Tono',
                'employee_salary' => 100000,
                'employee_age' => 50,
                'profile_image' => 'kuda.jpg',
            ),
            2 => 
            array (
                'id' => 5,
                'employee_name' => 'Asep',
                'employee_salary' => 500000,
                'employee_age' => 22,
                'profile_image' => 'pemandangan.jpg',
            ),
            3 => 
            array (
                'id' => 6,
                'employee_name' => 'Heru',
                'employee_salary' => 600000,
                'employee_age' => 22,
                'profile_image' => 'heru.jpg',
            ),
            4 => 
            array (
                'id' => 7,
                'employee_name' => 'Riky',
                'employee_salary' => 500000,
                'employee_age' => 22,
                'profile_image' => 'riky.jpg',
            ),
            5 => 
            array (
                'id' => 8,
                'employee_name' => 'Hanafi',
                'employee_salary' => 600000,
                'employee_age' => 22,
                'profile_image' => 'hanafi.jpg',
            ),
        ));
        
        
    }
}