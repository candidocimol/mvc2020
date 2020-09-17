<form method="POST" action="<?php echo HOME_URI;?>/aluno/salvar/">
  <div class="form-group">
    <label for="inputNome">Nome Completo</label>
    <input type="text" name="aluno[nome]"class="form-control" id="exampleInputNome" aria-describedby="NomeHelp" placeholder="Nome completo">
    
  </div>
  <div class="form-group">
    <label for="inputMatricula">Matricula</label>
    <input type="text" name="aluno[matricula]" class="form-control" id="inputMatricula" aria-describedby="MatriculaHelp" placeholder="Nome completo">
    
  </div>
  <div class="form-group">
    <label for="inputDataNascimento">Data de Nasciemnto</label>
    <input type="date" name="aluno[data_nascimento]" class="form-control" id="inputDataNascimento" aria-describedby="DataNasciemntoHelp" >
    
  </div>
  <button type="submit" name="aluno[enviar]" class="btn btn-primary">Enviar</button>
</form>