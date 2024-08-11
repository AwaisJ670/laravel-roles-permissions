<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            array('parent_id' => '0', 'name' => 'Dashboard', 'route' => '/admin/dashboard', 'head_name' => '', 'icon' => 'fas fa-home'),
            array('parent_id' => '0', 'name' => 'Reservations', 'route' => '/admin/reservations', 'head_name' => '', 'icon' => 'fas fa-file-invoice-dollar'),
            array('parent_id' => '0', 'name' => 'Customers', 'route' => '/admin/customers', 'head_name' => '', 'icon' => 'fas fa-money-check'),
            array('parent_id' => '0', 'name' => 'Fare Quotes', 'route' => '/admin/fare-quotes', 'head_name' => '', 'icon' => 'fas fa-dolly-flatbed'),
            array('parent_id' => '0', 'name' => 'Advertisement', 'route' => '/admin/advertisement', 'head_name' => '', 'icon' => 'fas fa-file-import'),
            array('parent_id' => '0', 'name' => 'Accounting', 'route' => '/admin/accounting', 'head_name' => '', 'icon' => 'fas fa-users-cog'),
            array('parent_id' => '0', 'name' => 'Airports', 'route' => '/admin/airport', 'head_name' => NULL, 'icon' => 'fas fa-plane'),
            array('parent_id' => '0', 'name' => 'Driver', 'route' => '/admin/driver', 'head_name' => NULL , 'icon' => 'fas fa-building'),
            array('parent_id' => '0', 'name' => 'Vehicles', 'route' => '/admin/vehicle', 'head_name' => NULL, 'icon' => 'fas fa-car'),
            array('parent_id' => '0', 'name' => 'Reports', 'route' => '/admin/reports', 'head_name' => 'Reports', 'icon' => 'fas fa-file-invoice-dollar'),
            array('parent_id' => '0', 'name' => 'Management', 'route' => '/admin/management', 'head_name' => 'Management', 'icon' => 'fas fa-cog'),
            array('parent_id' => '0', 'name' => 'Settings', 'route' => '/admin/setting', 'head_name' => 'Settings', 'icon' => 'fas fa-cog'),
            array('parent_id' => '7', 'name' => 'Airports', 'route' => '/admin/airport/airports', 'head_name' => '', 'icon' => ''),
            array('parent_id' => '7', 'name' => 'Airlines', 'route' => '/admin/airport/airlines', 'head_name' => '', 'icon' => ''),
            array('parent_id' => '7', 'name' => 'Flight destinations', 'route' => '/admin/airport/flight-destinations', 'head_name' => NULL, 'icon' => NULL),
            array('parent_id' => '8', 'name' => 'Driver Lists', 'route' => '/admin/driver/drivers', 'head_name' => '', 'icon' => ''),
            array('parent_id' => '8', 'name' => 'Driver Categories', 'route' => '/admin/driver/driver-categories', 'head_name' => '', 'icon' => ''),
            array('parent_id' => '8', 'name' => 'Blocked Drivers', 'route' => '/admin/driver/blocked-drivers/index', 'head_name' => '', 'icon' => NULL),
            array('parent_id' => '8','name' => 'Driver Expenses','route' => '/admin/driver/driver-sales-report','head_name' => NULL,'icon' => NULL),
            array('parent_id' => '8','name' => 'Driver Hours','route' => '/admin/driver/driver-hours-report','head_name' => NULL,'icon' => NULL),
            array('parent_id' => '9', 'name' => 'Vehicle Make', 'route' => '/admin/vehicle/vehicle_makes', 'head_name' => NULL, 'icon' => NULL),
            array('parent_id' => '9', 'name' => 'Vehicle Types', 'route' => '/admin/vehicle/vehicles', 'head_name' => NULL, 'icon' => NULL),
            array('parent_id' => '9', 'name' => 'Vehicle Parts', 'route' => '/admin/vehicle/vehicle_parts', 'head_name' => NULL, 'icon' => NULL),
            array('parent_id' => '10','name' => 'Sales','route' => '/admin/reports/sales','head_name' => '','icon' => ''),
            array('parent_id' => '10','name' => 'Expenses','route' => '/admin/reports/expense-report','head_name' => NULL,'icon' => NULL),
            array('parent_id' => '10','name' => 'Customers Phone','route' => '/admin/reports/customer-phone-report','head_name' => NULL,'icon' => NULL),
            array('parent_id' => '10','name' => 'Customers Email','route' => '/admin/reports/customer-email-report','head_name' => NULL,'icon' => NULL),
            array('parent_id' => '10','name' => 'Profit Loss','route' => '/admin/reports/profit-loss-reports','head_name' => NULL,'icon' => NULL),
            array('parent_id' => '11', 'name' => 'Coupon', 'route' => '/admin/management/coupons', 'head_name' => '', 'icon' => ''),
            array('parent_id' => '11', 'name' => 'Countries', 'route' => '/admin/management/countries', 'head_name' => '', 'icon' => ''),
            array('parent_id' => '11', 'name' => 'Cities', 'route' => '/admin/management/cities', 'head_name' => 'Management', 'icon' => ''),
            array('parent_id' => '11', 'name' => 'CMS', 'route' => '/admin/management/cms', 'head_name' => '', 'icon' => ''),
            array('parent_id' => '11', 'name' => 'Direct Accounts', 'route' => '/admin/management/direct_accounts', 'head_name' => 'Management', 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'Employees', 'route' => '/admin/management/employees', 'head_name' => NULL, 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'Expense Heads', 'route' => '/admin/management/expenses_head', 'head_name' => 'Management', 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'Hotels', 'route' => '/admin/management/hotels', 'head_name' => 'Management', 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'Phones', 'route' => '/admin/management/phones', 'head_name' => 'Management', 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'States/Province', 'route' => '/admin/management/states', 'head_name' => 'Management', 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'Services', 'route' => '/admin/management/services', 'head_name' => '', 'icon' => ''),
            array('parent_id' => '11', 'name' => 'Schedule Services', 'route' => '/admin/management/schedule-services', 'head_name' => 'Management', 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'Sites', 'route' => '/admin/management/sites', 'head_name' => 'Management', 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'User Groups', 'route' => '/admin/management/user_groups', 'head_name' => 'Management', 'icon' => NULL),
            array('parent_id' => '11', 'name' => 'Zip Codes', 'route' => '/admin/management/zip_codes', 'head_name' => 'Management', 'icon' => ''),
            array('parent_id' => '12', 'name' => 'Other Charges', 'route' => '/admin/setting/other_charges', 'head_name' => NULL, 'icon' => NULL),
            array('parent_id' => '12', 'name' => 'Discount Rules', 'route' => '/admin/setting/discount_rules', 'head_name' => NULL, 'icon' => NULL),
            array('parent_id' => '12', 'name' => 'Pay Type', 'route' => '/admin/setting/pay_types', 'head_name' => NULL, 'icon' => NULL),
        ]);
    }
}
