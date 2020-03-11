<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration { //Migrations siempre tiene que ir, mas el nombre de la mirgracion (create_user)

        public function up()// Lo que contiene este metodo es lo que se va a ejecutar
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10,//Tamaño
                                'unsigned' => TRUE,//No permite que se metan numeros negativos
                                'auto_increment' => TRUE
                        ),
                        'nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'correo' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'contraseña' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('usuarios');
        }

        public function down()//En este metodo funciona como un punto de control
        {
          $this->dbforge->drop_table('usuarios');
        }
}
