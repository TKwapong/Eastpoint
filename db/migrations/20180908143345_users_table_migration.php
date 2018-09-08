<?php


use Phinx\Migration\AbstractMigration;

class UsersTableMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('Users');
        $table->addColumn('id', 'integer')
              ->addColumn('First_Name', 'string')
                ->addColumn('Last_Name', 'string')
                ->addColumn('Email', 'string')
                ->addColumn('date_of_birth', 'date')
                ->addColumn('Sex', 'string')
                ->addColumn('Username', 'string')
                ->addColumn('Password', 'string')
                ->create();                 
    }

    public function up()
    {

    }

    public function down()
    {

    }
}