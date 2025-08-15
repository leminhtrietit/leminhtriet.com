<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class RolePermissionsRelationTest extends TestCase
{
    public function test_role_model_imports_spatie_permission()
    {
        $file = file_get_contents(__DIR__ . '/../../app/Models/Role.php');

        $this->assertStringContainsString('use Spatie\\Permission\\Models\\Permission;', $file);
        $this->assertStringContainsString('belongsToMany(Permission::class', $file);
    }
}
