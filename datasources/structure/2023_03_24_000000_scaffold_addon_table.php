<?php

use BlueFission\Framework\Datasource\Delta;
use BlueFission\Data\Storage\Structure\MysqlStructure as Structure;
use BlueFission\Data\Storage\Structure\MysqlScaffold as Scaffold;

class ScaffoldAddOnTable extends Delta
{
    public function change()
    {
        Scaffold::create('addons', function (Structure $entity) {
            $entity->incrementer('addon_id');
            $entity->text('name');
            $entity->text('version');
            $entity->numeric('is_active', 1)->default(0);
            $entity->text('primary_file');
            $entity->text('namespace');
            $entity->text('path');
            $entity->timestamps();
            $entity->comment("The table holding all of the application's addons.");
        });
    }

    public function revert()
    {
        Scaffold::delete('addons');
    }
}