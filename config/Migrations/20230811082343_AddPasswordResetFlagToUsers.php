<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class AddPasswordResetFlagToUsers extends AbstractMigration
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
            ->addColumn('password_reset_flag', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->update();
    }
}
