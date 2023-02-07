<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CurrenciesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SpecialsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(DiscountLevelsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MenuOptionsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(HomeBrandsTableSeeder::class);
        $this->call(CustomFieldsTableSeeder::class);
        $this->call(StickersTableSeeder::class);
        $this->call(MetaStaticPagesTableSeeder::class);
        $this->call(RedirectsTableSeeder::class);
        $this->call(OptionValuesTableSeeder::class);
        $this->call(DeliveryTableSeeder::class);
        $this->call(MetaPatternsTableSeeder::class);
        $this->call(HomePageSlidersTableSeeder::class);
        $this->call(FiltersTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(LockersTableSeeder::class);
        $this->call(LockerImagesTableSeeder::class);
        $this->call(LockerOrdersTableSeeder::class);
        $this->call(LockerSlidersTableSeeder::class);
        $this->call(LockerTablesTableSeeder::class);
        $this->call(EmailsTableSeeder::class);
        $this->call(BrandsTagsTableSeeder::class);
        $this->call(BrandsTagsConnectionTableSeeder::class);
        $this->call(BrandsIndustriesTableSeeder::class);
        $this->call(BrandsIndustriesConnectionTableSeeder::class);
        $this->call(FaqCategoriesTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
    }
}
