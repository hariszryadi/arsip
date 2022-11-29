<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'classification-list',
            'classification-create',
            'classification-edit',
            'classification-delete',
            'security-list',
            'security-create',
            'security-edit',
            'security-delete',
            'retention-list',
            'retention-create',
            'retention-edit',
            'retention-delete',
            'mapping-list',
            'mapping-create',
            'mapping-edit',
            'mapping-delete',
            'archive-creator-list',
            'archive-creator-create',
            'archive-creator-edit',
            'archive-creator-delete',
            'rack-list',
            'rack-create',
            'rack-edit',
            'rack-delete',
            'archives-vital-list',
            'archives-vital-create',
            'archives-vital-edit',
            'archives-vital-delete',
            'archives-vital-download',
            'archives-static-list',
            'archives-static-create',
            'archives-static-edit',
            'archives-static-delete',
            'archives-static-download',
            'archives-inactive-list',
            'archives-inactive-create',
            'archives-inactive-edit',
            'archives-inactive-delete',
            'archives-inactive-download',
            'archives-destroy-list',
            'archives-destroy-delete',
            'archives-over-list',
            'report-archive-vital-list',
            'report-archive-static-list',
            'report-archive-inactive-list',
            'report-guest-list',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'banner-list',
            'banner-create',
            'banner-edit',
            'banner-delete'
        ];
      
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
