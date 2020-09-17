<?php
class UserModel extends MainModel
{
	/**
	* Consulta para verificar usuario e senha durante a autenticação
	* @
	*
	**/
	public function autenticar($email, $password){
	echo $sql="SELECT p.id AS pessoa_id, p.nome, e.email, u.nick,
		(SELECT count(pessoa_id) FROM professor WHERE pessoa_id=p.id ) AS professor,
		(SELECT count(professor_pessoa_id) FROM coordenador WHERE professor_pessoa_id=p.id ) AS coordenador 
		FROM usuario u
		JOIN pessoa p ON p.id=u.pessoa_id
		JOIN email e ON e.pessoa_id=p.id
		WHERE 
		e.email= '$email'
		AND
		u.password= '$password' ";
		$result=$this->db->query($sql,null);
		$user=null;
		While($item=$result->fetch(PDO::FETCH_ASSOC)){
			$user[]=$item;
		}
		return $user;
	}

	public function loadCursoCoordenador($pessoa_id){
		$sql="SELECT c.* FROM coordenador co
		JOIN curso c ON c.id=co.curso_id
		WHERE
		co.professor_pessoa_id=".$pessoa_id;

		$result=$this->db->query($sql,null);
		$curso=null;
		While($item=$result->fetch(PDO::FETCH_ASSOC)){
			$curso[]=$item;
		}
		return $curso;
	}

	

}