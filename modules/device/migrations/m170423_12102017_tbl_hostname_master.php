<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\db\Migration;

class m170423_12102017_tbl_hostname_master extends Migration {

    public function up() {
        $this->createTable('tbl_hostname_master', [
            'id' => Schema::TYPE_PK,
            'hostname' => $this->text(15)->notNull(),
            'ip_address' => $this->string(10),
        ]);
    }

    public function down() {
        echo "m170423_12102017_tbl_hostname_master cannot be reverted.\n";

        return false;
    }

    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
