<?php

use yii\db\Migration;

/**
 * Class m221102_022720_create_produto
 */
class m221102_022720_create_produtos extends Migration
{
        public function up()
        {

            $this->createTable('unidade', [
                'ID' => $this->primaryKey(),
                'Descricao' => $this->string(60),
            ]);
    

            $this->createTable('produtos', [
                'ID' => $this->primaryKey(),
                'Descricao' => $this->string(60),
                'IDUnidade' => $this->integer(11),//->notNull(),
                'ValorUnitario' => $this->decimal(13,2)->notNull(),//->notNull(),
                'Validade' => $this->dateTime(),//->notNull(),
                'Status' => $this->smallInteger(1),//->notNull->defaultValue(1),
            ]);

            $this->addForeignKey('fk_unidade_produtos', 'produtos', 'IDUnidade', 'unidade', 'ID');

            $this->insert('unidade', [
                'Descricao' => 'Unidade',
            ]);

            $this->insert('unidade', [
                'Descricao' => 'Caixa',
            ]);

            $this->insert('unidade', [
                'Descricao' => 'Ampola',
            ]);
            
            $this->insert('unidade', [
                'Descricao' => 'Miligrama',
            ]);
    
        }
    
        public function down()
        {
            $this->dropForeignKey('fk_unidade_produtos', 'produtos');
            $this->dropTable('produtos');
            $this->dropTable('unidade');
        }
        
}
