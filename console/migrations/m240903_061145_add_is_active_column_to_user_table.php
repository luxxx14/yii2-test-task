<?php

use yii\db\Migration;

/**
 * Class m240903_061145_alter_status_column_to_user_table
 */
class m240903_061145_add_is_active_column_to_user_table extends Migration
{

    public function up()
    {
        $this->addColumn('{{%user}}', 'is_active', $this->boolean()->defaultValue(true));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'is_active');
    }

}
