<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Cliente extends AbstractMigration
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
        // Table
        $this->table('cliente', array('id' => false, 'primary_key' => 'id_cliente'))

        //ID
        ->addColumn('id_cliente', 'integer', ['identity' => true])

        //Status - Uma conta pode ser bloqueada por determinação judicial por exemplo
        ->addColumn('status', 'boolean', ['default' => 1])

        //Nome completo do cliente
        ->addColumn('nome', 'string', ['limit' => 120])

        //E-mail
        ->addColumn('email', 'string', ['limit' => 120])

        //Senha - Hoje a criptografia usar apenas 60 caracteres mais por orientação do próprio PHP, usar tabela com limite de 255 caracteres
        ->addColumn('senha', 'string', ['limit' => 255, 'null' => true])

        ->addColumn('conta', 'integer', ['null'=>true])

        //Se a pessoa tiver conta, você primeiro tem de apagar a conta para depois apagar o cliente.
        ->addForeignKey('conta', 'conta', 'id_conta', ['delete' => 'RESTRICT', 'update' => 'CASCADE'])

        ->addTimestamps()

        ->create();

        $this->execute('ALTER TABLE cliente MODIFY COLUMN updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
    }
}
