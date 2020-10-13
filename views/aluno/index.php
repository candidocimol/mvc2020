<div class="wrap">
<?php 
	$user=$this->getUser(); 
    if ($user) {
        if ($user['nivel']=='admin')
    ?>
    <a href="<?php echo HOME_URI; ?>/aluno/add/" class="btn btn-primary">ADD</a>
    <?php
    }
    ?>
    <hr/>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Matrícula</th>
        <th scope="col">Data de Nascimento</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if($alunos){
            foreach($alunos AS $aluno){
                
                echo "<tr>
                <th scope='row'>".$aluno['id']."</th>
                <td>".$aluno['nome']."</td>
                <td>".$aluno['matricula']."</td>
                <td>".$aluno['data_nascimento']."</td>
                <td>";
                    if ($user) {
                        if ($user['nivel']=='admin') {
                            echo "<a href='".HOME_URI."aluno/editar/".$aluno['id']."' >Editar</a>
                            <a href='".HOME_URI."aluno/excluir/".$aluno['id']."' >Excluir</a>";
                        }
                    }
                echo "</td></tr>";
            }
        }
    
    ?>  
    </tbody>
    </table>
</div>