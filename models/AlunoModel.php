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
    

    public function insert($aluno){
        $array[]=$aluno;
        return $resultado=$this->db->insert("aluno",$array);
    }

    public function update($aluno){
        $sql="UPDATE aluno SET nome='".$aluno['nome']."', matricula='".$aluno['matricula']."', 
        data_nascimento='".$aluno['data_nascimento']."' WHERE id=".$aluno['id'];

        $retorno=$this->db->query($sql, null);
        return $retorno;
    }
    


}