<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class Users extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', ['limit' => 150, 'null' => false])
              ->addColumn('password', 'string', ['limit' => 255, 'null' => false])
              ->addColumn('first_name', 'string', ['limit' => 150, 'null' => false])
              ->addColumn('last_name', 'string', ['limit' => 150, 'null' => true])
              ->addColumn('status', 'boolean', ['default' => true])
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->addIndex(['username'], ['unique' => true])
              ->create();
    }
}
