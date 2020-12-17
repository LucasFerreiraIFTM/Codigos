<body class ="">


<form method="POST" > 
<div class="container">
	<div class="row">
		
		<div class="col-8 form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control"/>
		</div>
		<div class="col-4 form-group">
			<label for="matricula">Matrícula:</label>
			<input type="text" name="matricula" id="matricula" class="form-control"/>
		</div>
	</div>
	<div class="row">
		<div class="col-6 form-group">
			<label for="turma">Turma:</label>
			
			<select type="text" name="turma" id="turma" class="form-control">
				<option value="exemplo">Exemplo</option>
			</select>
		</div>
		<div class="col-6 form-group">
			<label for="email">E-mail:</label>
			<input type="text" name="email" id="email" class="form-control"/>
		</div>
		
	</div>
	<div class = "row">
	<div class="col-8 form-group">
			<label for="cpf">CPF:</label>
			<input type="text" name="cpf" id="cpf" class="form-control" />
		</div>
	<div class="col-4 form-group">
			<input type="hidden" name="id" value="id" />
			<button onclick="loginA()" id="login" type="submit" class="btn btn-success botons btn-block">Salvar</button>
		</div>
	</div>
</div>
</form>

	
</body>

<script>

	 function loginA(){
	  nome = document.getElementById("nome").value;
	  matricula = document.getElementById("matricula").value;
	  turma = document.getElementById("turma").value;
	  email = document.getElementById("email").value;
	  cpf = document.getElementById("cpf").value;
	  
	  
	  var alunoDB = firebase.database().ref("Alunos");
	  var aluno = { "nome": nome, "matricula": matricula, "turma": turma, "email": email, "cpf": cpf};
	  alunoDB.push(aluno);
	}
</script>

