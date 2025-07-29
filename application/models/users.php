<?php
class Users extends CI_Model
{




    public function consultaUsers($consulta = '')
    {
        $result = $this->db->query("SELECT * FROM  bicicleta WHERE numero_Serie = '" . $consulta . "' ");

        if ($result->num_rows() > 0) {
            return $result->row_array();
        } else {
            return null;
        }
    }
    function restaurar($usuario)
    {
        $result = $this->db->query("SELECT usuario.*,login.*
                                        FROM usuario
                                        JOIN login on login.usuario_Email= usuario.email
                                        where usuario.email='$usuario'
                                    ");
        if ($result->num_rows() > 0) {
            return $result->row_array();
        } else {
            return null;
        }
    }

    public function dregistro($usuario = null, $password = null)
    {

        $result = $this->db->query("SELECT usuario.*,bicicleta.*,login.*
                                        FROM
                                        usuario
                                        LEFT JOIN bicicleta  on bicicleta.id_Usuario= usuario.id_Usuario
                                        LEFT JOIN login on login.usuario_Email= usuario.email
                                        where usuario.email='$usuario'
                                        AND login.`password`='$password'");

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return null;
        }
    }
    function registrarbici($bike)
    {
        $result = $this->db->where("id_Usuario", $bike["id_Usuario"])
            ->get(BICI);


        if ($result->num_rows() < 3) {
            $query = $this->db->insert(BICI, $bike);

            return $query;
        } else {
            return null;
        }
    }
}
