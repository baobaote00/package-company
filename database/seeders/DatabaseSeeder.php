<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('Foostart\Acl\Database\PermissionSeeder');
        $this->call('Foostart\Acl\Database\GroupsSeeder');
        $this->call('Foostart\Acl\Database\UserSeeder');
        $this->call('Database\Seeders\PostsSeeder');

        Eloquent::reguard();
    }
}
