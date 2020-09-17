<?php

class AlunoModel extends MainModel{

    public function listar(){
        $sql="SELECT * FROM aluno";

		$retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
		}
		return $resultado;
    }

    public function select($id=null){
		if($id){
			$where['id']=$id;
		}else{
			$where=null;
        }
        return $this->db->select("aluno", null, $where);
    }
    

    public function insert($array){
        
        return $resultado=$this->db->insert("aluno",$array);
    }


}