<?php
use yii\db\Schema;
use yii\db\Migration;

class m141119_220432_comments extends Migration
{

    public function up()
    {
        
        /*
         *
         * CREATE TABLE IF NOT EXISTS `tbl_comment` (
         * `id` int(11) NOT NULL AUTO_INCREMENT,
         * `comment` text COLLATE utf8_unicode_ci,
         * `model_type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
         * `model_id` int(11) NOT NULL,
         * `state_id` int(11) NOT NULL DEFAULT '0',
         * `type_id` int(11) NOT NULL DEFAULT '0',
         * `create_time` datetime DEFAULT NULL,
         * `create_user_id` int(11) DEFAULT NULL,
         * PRIMARY KEY (`id`),
         * KEY `fk_comment_create_user` (`create_user_id`),
         * CONSTRAINT `fk_comment_create_user` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`)
         * ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
         *
         */
         $this->createTable('{{%comment}}', [
            'id' => 'pk',
            'comment' => Schema::TYPE_TEXT,
            'model_type' => Schema::TYPE_STRING,
            'model_id' => Schema::TYPE_INTEGER,
            'state_id' => Schema::TYPE_INTEGER,
            'type_id' => Schema::TYPE_INTEGER,
            'create_time' => Schema::TYPE_DATETIME,
            'create_user_id' => Schema::TYPE_INTEGER
        ]
        );
    }

    public function down()
    {
        echo "m141119_220432_comments cannot be reverted.\n";
        $this->dropTable('{{%comment}}');
        return false;
    }
}
