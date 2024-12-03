<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class UserProfiles extends BaseMigration
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
        $table = $this->table('user_profiles');
        $table->addColumn('user_id', 'integer', ['null' => false])
              ->addColumn('profile_type', 'string', ['limit' => 50, 'null' => false])
              ->addColumn('email', 'string', ['limit' => 150, 'null' => false])
              ->addColumn('mobile_number', 'string', ['limit' => 15, 'null' => true])
              ->addColumn('image', 'string', ['limit' => 255, 'null' => true])
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
              ->create();
    }
}
