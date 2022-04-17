<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Conta extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $this->table('conta', ['id' => false, 'primary_key' => 'id_conta'])
        //id da conta
        ->addColumn('id_conta', 'integer', ['identity' => true])
        ->addColumn('agencia', 'string', ['limit' => 4]) // Numero da agencia
        ->addColumn('conta', 'string', ['limit' => 10]) // Numero da conta
        ->addColumn('digito', 'integer', ['limit' => 1]) // Digito da conta
        ->addColumn('debito', 'decimal', ['precision' => 7, 'scale'=> 2, 'default'=> 0]) // Limite cheque especial
        ->addColumn('credito', 'decimal', ['precision' => 7, 'scale'=> 2, 'default'=> 0]) // Limite de credito
        ->addColumn('saldo_debito', 'decimal', ['precision' => 10, 'scale'=> 2, 'default'=> 0]) // Saldo para debito
        ->addColumn('saldo_credito', 'decimal', ['precision' => 10, 'scale'=> 2, 'default'=> 0]) // Saldo para credito
        ->addTimestamps()

        ->create();
        
        $this->execute('ALTER TABLE conta MODIFY COLUMN updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
    }
}
