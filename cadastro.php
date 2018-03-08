<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<title></title>
</head>
<body  style="float: center">


        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading" style="background-color: #555">
			    		<h3 class="panel-title" style="color: #ddd; text-align: center;">Cadastro</h3>
			 			</div>
			 				<div class="panel-body" style="background-color: #555">
			    			<form role="form" method="post" action="confirmar.php">
			    				<div class="row">
			    					<div class="col-xs-6 col-sm-6 col-md-3">
			    						<div class="form-group">
			                				<input type="text" name="nome" id="nome" class="form-control input-sm" placeholder="Nome" required>
			    						</div>
			    					</div>
			    					<div class="col-xs-6 col-sm-6 col-md-3">
			    						<div class="form-group">
			    							<input type="text" name="sobrenome" id="sobrenome" class="form-control input-sm" placeholder="Sobrenome" required>
			    						</div>
			    					</div>
			    					<div class="col-xs-6 col-sm-6 col-md-3">
			    						<div class="form-group">
			    							<input type="text" name="cep" id="cep" class="form-control input-sm" placeholder="CEP" required>
			    						</div>
			    					</div>
			    					<div class="col-xs-6 col-sm-6 col-md-3">
			    						<div class="form-group">
			    							<input type="text" name="bairro" id="bairro" class="form-control input-sm" placeholder="Bairro" required>
			    						</div>
			    					</div>
			    				</div>
			    				<div class="row">
			    					<div class="col-xs-6 col-sm-6 col-md-4">
			    						<div class="form-group">
			    							<input type="email" name="email" id="email" class="form-control input-sm" placeholder="E-mail" required>
			    						</div>
			    					</div>
			    					<div class="col-xs-6 col-sm-6 col-md-3">
			    						<div class="form-group">
			    							<input type="text" name="rg" id="rg" class="form-control input-sm" placeholder="RG" required>
			    						</div>
			    					</div>
			    					<div class="col-xs-6 col-sm-6 col-md-2">
			    						<div class="form-group">
			    							<input type="text" name="sigla" id="sigla" class="form-control input-sm" placeholder="Sigla" required>
			    						</div>
			    					</div>
			    					<div class="col-xs-6 col-sm-6 col-md-3">
			    						<div class="form-group">
			    							<input type="text" name="cidade" id="cidade" class="form-control input-sm" placeholder="Cidade" required>
			    						</div>
			    					</div>	
			    				</div>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-4">
			    					<div class="form-group">
			    						<input type="cpf" name="cpf" id="cpf" class="form-control input-sm" placeholder="CPF" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-2">
			    					<div class="form-group">
			    						<input type="text" name="data" id="data" class="form-control input-sm" placeholder="Data" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="endereco" name="endereco" id="endereco" class="form-control input-sm" placeholder="Endereço" required>
			    					</div>
			    				</div>
			    			</div>			    			
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-2">
			    					<div class="form-group">
			    						<input type="text" name="telefone" id="telefone" class="form-control input-sm" placeholder="Telefone" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-2">
			    					<div class="form-group">
			    						<input type="text" name="celular1" id="celular1" class="form-control input-sm" placeholder="Celular 1" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-2">
			    					<div class="form-group">
			    						<input type="text" name="celular2" id="celular2" class="form-control input-sm" placeholder="Celular 2" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-2">
			    					<div class="form-group">
			    						<input type="text" name="comercial" id="comercial" class="form-control input-sm" placeholder="Telefone Comercial" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-2">
			    					<div class="form-group">
			    						<input type="text" name="numero" id="numero" class="form-control input-sm" placeholder="Nº" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-2">
			    					<div class="form-group">
			    						<input type="text" name="complemento" id="complemento" class="form-control input-sm" placeholder="Complemento" required>
			    					</div>
			    				</div>

			    			</div>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-3">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Senha" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-4">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirme sua Senha" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-4">
			    					<div class="form-group">
			    						<input type="submit" value="Enviar" class="btn btn-info btn-block" style="margin-left: 30px;">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			
			    		
			    		</form>
						</div>
	    	</div>
   		</div>

</body>
</html>