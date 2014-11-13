<?php

use yii\db\Schema;
use yii\db\Migration;

class m141011_154631_1046 extends Migration
{
    public function up()
    {
        $this->createTable('posts', array(
            'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'title' => 'VARCHAR(255)',
            'data' => 'TEXT',
            'create_time' => 'INT',
            'update_time' => 'INT'
        ));

        $this->createTable('user', array(
            'id_user' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'name_user' => 'VARCHAR(50)',
            'password_user' => 'VARCHAR(100)',
            'saltpassword_user' => 'VARCHAR(100)',
            'email_user' => 'VARCHAR(50)',
            'level_id' => 'INT',
        ));
        $this->createTable('{{%user_default}}', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL',
            'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
            'password_reset_token' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'role' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->createTable('level', array(
            'id_level' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'name_level' => 'VARCHAR(50)',
        ));
        $this->createTable('news', array(
            'id_news' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'title_news' => 'VARCHAR(50)',
            'content_news' => 'TEXT',
            'pictureloc_news' => 'VARCHAR(50)',
            'user_id' => 'INT',
        ));
        $this->createTable('thread', array(
            'id_thread' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'title_thread' => 'VARCHAR(20)',
            'content_thread' =>'TEXT',
            'create_thread' => 'DATETIME',
            'update_thread' => 'DATETIME',
            'category_id' => 'INT',
            'user_id' => 'INT',
        ));
        $this->createTable('comment', array(
            'id_comment' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'tittle_comment' => 'VARCHAR(30)',
            'content_comment' => 'TEXT',
            'create_comment' => 'DATETIME',
            'update_comment' => 'DATETIME',
            'user_id' => 'INT',
            'thread_id' => 'INT',
        ));
        $this->createTable('category', array(
            'id_category' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'name_category' => 'VARCHAR(50)',
        ));
        $this->createTable('threadstar', array(
            'id_threadstar' => 'INT PRIMARY KEY AUTO_INCREMENT',
            'rate_threadstar' => 'INT',
            'user_id' => 'INT',
            'thread_id' => 'INT',
        ));
    }

    public function down()
    {
        $this->dropTable('posts');
        $this->dropTable('user');
        $this->dropTable('level');
        $this->dropTable('thread');
        $this->dropTable('comment');
        $this->dropTable('category');
        $this->dropTable('threadstar');
        $this->dropTable('news');
        $this->dropTable('user_default');
    }
}
