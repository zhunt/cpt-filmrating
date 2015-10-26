<?php
use Migrations\AbstractMigration;

class Filmvotes extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('film_votes');
        $table
            ->addColumn('film', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('vote_1', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('vote_2', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('vote_3', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('vote_4', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('vote_5', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

    }

    public function down()
    {
        $this->dropTable('film_votes');
    }
}
