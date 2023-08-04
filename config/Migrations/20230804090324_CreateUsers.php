<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $this->table('users')
            ->addColumn('loginid', 'string', [
                'default' => null,
                'limit' => 255,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
            ])
            ->create();
    }
}
