<?php
use App\Vehicle;
use Illuminate\Database\Seeder;

class vehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            ['category_id'=>1,'vehicle_name'=>'Mini Cooper1','vehicle_Brand'=>'Mini Cooper1','price_per_day'=>rand(1499,2499),'image'=>'["images\/Cars\/Convertible\/2011-chrysler-200-limited-promo.jpg"]','model_year'=>2018,'vehicle_color'=>'red','vehicle_year'=>2018,'description'=>'Best Mini in the world','seating_capacity'=>rand(1,6),'fuel_type'=>'Super unleaded petrol','transmission_type'=>'Automatic','Engine_Capacity'=>1200,'Airbag'=>'Yes','CDPlayer'=>'Yes','power_steering'=>'Yes','url'=>'miniCooper'],
            ['category_id'=>1,'vehicle_name'=>'Mini Cooper2','vehicle_Brand'=>'Mini Cooper3','price_per_day'=>rand(1499,2499),'image'=>'[\"images\/Cars\/Convertible\/mini.jpg"]','model_year'=>2018,'vehicle_color'=>'red','vehicle_year'=>2018,'description'=>'Best Mini in the world','seating_capacity'=>rand(1,6),'fuel_type'=>'Super unleaded petrol','transmission_type'=>'Automatic','Engine_Capacity'=>1200,'Airbag'=>'Yes','CDPlayer'=>'Yes','power_steering'=>'Yes','url'=>'miniCooper'],
            ['category_id'=>1,'vehicle_name'=>'Mini Cooper3','vehicle_Brand'=>'Mini Cooper4','price_per_day'=>rand(1499,2499),'image'=>'[\"images\/Cars\/Convertible\/peugeot-308 CABRIOLET-268.jpeg"]','model_year'=>2018,'vehicle_color'=>'red','vehicle_year'=>2018,'description'=>'Best Mini in the world','seating_capacity'=>rand(1,6),'fuel_type'=>'Super unleaded petrol','transmission_type'=>'Automatic','Engine_Capacity'=>1200,'Airbag'=>'Yes','CDPlayer'=>'Yes','power_steering'=>'Yes','url'=>'miniCooper'],
            ['category_id'=>1,'vehicle_name'=>'Mini Cooper4','vehicle_Brand'=>'Mini Cooper5','price_per_day'=>rand(1499,2499),'image'=>'[\"images\/Cars\/Convertible\/mini.jpg"]','model_year'=>2018,'vehicle_color'=>'red','vehicle_year'=>2018,'description'=>'Best Mini in the world','seating_capacity'=>rand(1,6),'fuel_type'=>'Super unleaded petrol','transmission_type'=>'Automatic','Engine_Capacity'=>1200,'Airbag'=>'Yes','CDPlayer'=>'Yes','power_steering'=>'Yes','url'=>'miniCooper'],
            ['category_id'=>1,'vehicle_name'=>'Mini Cooper5','vehicle_Brand'=>'Mini Cooper6','price_per_day'=>rand(1499,2499),'image'=>'[\"images\/Cars\/Convertible\/2011-chrysler-200-limited-promo.jpg"]','model_year'=>2018,'vehicle_color'=>'red','vehicle_year'=>2018,'description'=>'Best Mini in the world','seating_capacity'=>rand(1,6),'fuel_type'=>'Super unleaded petrol','transmission_type'=>'Automatic','Engine_Capacity'=>1200,'Airbag'=>'Yes','CDPlayer'=>'Yes','power_steering'=>'Yes','url'=>'miniCooper'],
            ['category_id'=>1,'vehicle_name'=>'Mini Cooper6','vehicle_Brand'=>'Mini Cooper7','price_per_day'=>rand(1499,2499),'image'=>'[\"images\/Cars\/Convertible\/mini.jpg"]','model_year'=>2018,'vehicle_color'=>'red','vehicle_year'=>2018,'description'=>'Best Mini in the world','seating_capacity'=>rand(1,6),'fuel_type'=>'Super unleaded petrol','transmission_type'=>'Automatic','Engine_Capacity'=>1200,'Airbag'=>'Yes','CDPlayer'=>'Yes','power_steering'=>'Yes','url'=>'miniCooper'],
            ['category_id'=>1,'vehicle_name'=>'Mini Cooper7','vehicle_Brand'=>'Mini Cooper8','price_per_day'=>rand(1499,2499),'image'=>'[\"images\/Cars\/Convertible\/2011-chrysler-200-limited-promo.jpg"]','model_year'=>2018,'vehicle_color'=>'red','vehicle_year'=>2018,'description'=>'Best Mini in the world','seating_capacity'=>rand(1,6),'fuel_type'=>'Super unleaded petrol','transmission_type'=>'Automatic','Engine_Capacity'=>1200,'Airbag'=>'Yes','CDPlayer'=>'Yes','power_steering'=>'Yes','url'=>'miniCooper'],
         ]);
            }
}
