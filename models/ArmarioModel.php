<?php
class ArmarioModel extends MainModel
{


	public function listar($curso_id){
		$where['curso_id']=$curso_id;
		return $this->db->select('armario', null, $where);
		
	}

	public function listarDisponiveis($curso_id){
		$sql="SELECT a.*
		FROM armario a
		LEFT JOIN armario_aluno aa ON aa.armario_id=a.id
		WHERE a.curso_id=".$curso_id
		." AND 
		(SELECT count(armario_id) FROM armario_aluno WHERE armario_id=a.id AND  data_entrega is null) =0
		";

		$result=$this->db->query($sql,null);
		$armarios=null;
		While($item=$result->fetch(PDO::FETCH_ASSOC)){
			$armarios[]=$item;
		}
		//print_r($armarios);
		return $armarios;
		
	}

	public function listarComDetalhes($curso_id){
		$where['curso_id']=$curso_id;
		$sql="SELECT 
		a.*,p.nome,
		(SELECT count(armario_id) FROM armario_aluno WHERE armario_id=a.id AND  data_entrega is null) AS ocupado,
		(SELECT count(armario_id) FROM armario_aluno WHERE armario_id=a.id AND  data_fim< '2020-03-04') AS atraso
		FROM 
		armario a
		LEFT JOIN armario_aluno aa ON aa.armario_id=a.id
		LEFT JOIN aluno al ON al.pessoa_id=aa.aluno_pessoa_id
		LEFT JOIN pessoa p ON p.id=al.pessoa_id";

		$result=$this->db->query($sql,null);
		$armarios=null;
		While($item=$result->fetch(PDO::FETCH_ASSOC)){
			$armarios[]=$item;
		}
		return $armarios;
	}

	
	public function salvar($armario){
		print_r($armario);
		$this->db->insert("armario", $armario);
	}

	public function registrarEmprestimo($dados){
		$resultado=$this->db->insert("armario_aluno",$dados);
	}

	public function registrarEntrega($dados){
		$resultado=$this->db->insert("armario_aluno",$dados);
	}

	public function delete($armario){
		$resultado=$this->db->delete();
	}

	
}