<?php

class categoria_model extends CI_Model {

    function ver_todas_categoria() {
        return $this->db->get('categoria');
    }

    function obter_uma_categoria($id_categoria) {
        return $this->db->get_where('categoria', array('id_categoria' => $id_categoria));
    }

    function obter_categoria_ativa(){
        return $this->db->get_where('categoria', array('status_categoria' => 1));
    }
            
    function salvar_nova_categoria($data) {
        $this->db->insert('categoria', $data);
    }

    function alterar_dados_categoria($dados, $idcategoria) {
        $this->db->where('id_categoria', $idcategoria);
        $this->db->update('categoria', $dados);
    }

    function excluir_categoria($idCategoira) {
        $this->db->delete('categoria', array('id_categoria' => $idCategoira));
    }

    //--------- Trabalhando com sub categoria----------//
    function salvar_nova_subcategoria($data) {
        $this->db->insert('sub_categoria', $data);
    }

    function obter_subcategorias_de_categoria($id_categoria) {
        $this->db->where('id_categoria', $id_categoria);
        return $this->db->get('sub_categoria');
    }

    function obter_subcategoria($id_subcategoria) {
        $this->db->where('id_sub_categoria', $id_subcategoria);
        return $this->db->get('sub_categoria');
    }

    function alterar_dados_subcategoria($dados, $idsubcategoria) {
        $this->db->where('id_sub_categoria', $idsubcategoria);
        $this->db->update('sub_categoria', $dados);
    }

    function excluir_subcategoria($idSubcategoira) {
        $this->db->delete('sub_categoria', array('id_sub_categoria' => $idSubcategoira));
    }

    //put your code here
}

?>
