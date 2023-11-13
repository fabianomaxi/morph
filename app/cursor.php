<?php

@session_start() ;

if( $_SERVER["HTTP_HOST"] != "univestuario.com.br" ) {
	$path = "http://127.0.0.1:85/scriptcase/file/img/" ;	
}

// $path = "http://127.0.0.1:85/scriptcase/file/img/" ;	

$path = "http://empregospet.com.br/logos/" ;
//$pathFisico = "/home/partiuredacaocom/public_html/prod/file/img/" ;

//$pathFisico = "img/" ;	


class Conexao{
	var $conn;
	function Conexao( $host = 'mysql.cameleonproject.com', $user = 'cameleonprojec', $pass = 'ca301085' , $bd = 'cameleonprojec' ){
		$this->conn = @mysqli_connect( $host, $user, $pass , $bd );
	}
	function getConexao(){
		return $this->conn;
	}
	function executar( $aSQL ){
		$r = @mysqli_query( $this->conn , $aSQL );
		return $r;
	}
}

class Cursor{
	var $conn;
	var $cursor;
	var $linhas;
	var $linhaAtual;
	var $eof;
	function Cursor( $aSQL ){
			//$aSQL = $this->anti_injection( $aSQL ) ;
			//echo $aSQL ; exit ;
			$c = new Conexao();
			$this->conn = $c->getConexao();
			$this->cursor = $c->executar( $aSQL );
			$this->eof = true;
			$this->linhas();
			if( $this->linhas ){		
				$this->eof = false;
			}			 
	}
	function fetch(){
		if( $this->cursor ){
			$r = @mysqli_fetch_array( $this->cursor );
			$this->linhaAtual++ ;
			if( $this->linhaAtual >= $this->linhas ){
				$this->eof = true;				
			}
		}
		return $r;	
	}
	function eof(){
		return $this->eof;
	}
	function linhas(){
		$this->linhas = @mysqli_num_rows( $this->cursor );
		return $this->linhas;
	}


}

function jsAlertLocation( $url, $msg ) {
	?>
		<script>
			alert('<?=$msg?>') ;
			window.location = '<?=$url?>' ;
		</script>
	<?php
}

function jsLocation( $url ) {
	?>
		<script>
			window.location = '<?=$url?>' ;
		</script>
	<?php
}

$variaveis = array(
	"[#titulo#]" 			=> "titulo" ,
	"[#texto_completo#]" 	=> "texto_completo" ,
	"[#imagem_principal#]" 	=> "imagem_principal" ,
	"[#slug#]" 				=> "slug" ,
	"[#texto_reduzido#]" 	=> "texto_reduzido" ,
	"[#id_paginas#]" 		=> "id_paginas" ,
	
) ;

?>
