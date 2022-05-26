<html>
	<head>
	<title>Aula 04 - Exercício para nota (2.5 pontos)</title>
	</head>
	<body>
		<h1>&copy Guilherme Cardoso  - 2021 - PHP - Exércicio 1</h1>
		<?php
		echo"<h1>Guilherme Cardoso dos Santos | RA 1840482022029</h1>";
		echo"<br><br>";
		/*
			Função para inserir um curso no vetor
			Curso é composto por sigla, nome e array de disciplinas
		*/
		function fc_insere_curso($sigla_curso, $nome_curso){
			global $cursos;

			//Colocado array disciplinas dentro do curso, para que assim forme os dois
			$curso = array('sigla' => $sigla_curso,'nome' => $nome_curso,'disciplinas' => array());
			$tamanho = count($cursos);
			$cursos[$tamanho] = $curso;
		}
		
		/*
			Função para inserir uma disciplina no curso
			Disciplina: sigla, nome, carga horária e array de alunos
		*/
		function fc_insere_disciplina($sigla_curso, $sigla_disciplina, $nome_disciplina, $carga_disciplina){
			global $cursos;

			//Assim funciona a inserção de alunos na disciplina, que é um array dentro de outro
			//Foreach percorre todo o array $curso, até que encontre a sigla que bata

			foreach ($cursos as $key => $curso) {
				//matriz curso, dentro da disciplina
				if ($curso['sigla'] == $sigla_curso) {
					$disciplina = array('sigla' => $sigla_disciplina, 'nome' => $nome_disciplina, 'carga' => $carga_disciplina, 'alunos' => array());	
					$tamanho = count($curso['disciplinas']);
					$cursos[$key]['disciplinas'][$tamanho] = $disciplina;
				}
			}

		}
		
		/*
			Função para inserir
			
		*/
		
		function fc_insere_aluno($sigla_disciplina, $matricula_aluno, $nome_aluno, $email_aluno){
			global $cursos;
			//Ninho foreach = um foreach dentro do outro
			foreach ($cursos as $key => $curso) {
				foreach ($curso['disciplinas'] as $key2 => $disciplina) {
					if ($disciplina['sigla'] == $sigla_disciplina) {
						$aluno = array('matricula' => $matricula_aluno, 'nome' => $nome_aluno, 'email' => $email_aluno);
						$tamanho = count($disciplina['alunos']);
						$cursos[$key]['disciplinas'][$key2]['alunos'][$tamanho] = $aluno;

					}
				}
			}

		}
		
		/*
			Função para exibir as siglas e cursos no array multidimen.
		*/
		function fc_mostra_cursos(){
			global $cursos;
			echo "<h1>Cursos da nossa Universidade:</h1>";
			$nomes_cursos = array();
			foreach ($cursos as $key => $curso) {
				$nome_curso = array('sigla' => $curso['sigla'], 'nome' => $curso['nome']);
				$tamanho = count($nomes_cursos);
				$nomes_cursos[$tamanho] = $nome_curso;
				print("Curso de {$curso['nome']} ({$curso['sigla']})</br>");
			}
		}
		/*
			Função para exibir informações do array
		*/
		
		function fc_mostra_disciplinas($sigla_curso){
		global $cursos;
		print("<br><h1>Disciplinas do curso de {$sigla_curso}:</h1>");
		foreach ($cursos as $curso) {
			
			if ($curso['sigla'] == $sigla_curso) {	
				foreach ($curso['disciplinas'] as $disciplina) {
					print("{$disciplina['nome']} ({$disciplina['sigla']}) - Carga Horária: {$disciplina['carga']}</br>");
				}
			}
		}
	}
		/*
			Função feita para exibir as informçoes dos alunos dentro do curso
		*/
		
		function fc_mostra_alunos($sigla_disciplina){
		global $cursos;
		print("<br><h1>Alunos de {$sigla_disciplina}:</h1>");
		
		foreach ($cursos as $curso) {
			foreach ($curso['disciplinas'] as $disciplina) {
				if ($disciplina['sigla'] == $sigla_disciplina) {
					foreach ($disciplina['alunos'] as $aluno) {	
						echo "Matrícula: {$aluno['matricula']}";
						echo "</br>";
						echo "Nome: {$aluno['nome']}";
						echo "</br>";
						echo "E-mail: {$aluno['email']}";
						echo "</br>";
						echo "</br>";	
					}
				}
			}
		}
		
	}
		/*
			Exibir conteudo inteiro do array multidi
		*/
		function fc_mostra_array(){
			global $cursos;
			echo "<h3>Array multidimensional completo:</h3>";
			print_r($cursos);
			//<pre> tag HTML
			echo "<h3>Array legível e totalmente identado (Completo):</h3>";
			echo "<pre>";
			print_r($cursos);
			echo "</pre>";
		}
		?>
		<h1>Curso e Disciplina da Faculdade de Tecnologia de Mogi das Cruzes</h1>
		<?php
		// Array principal
		$cursos = array();
		fc_insere_curso('ADS','Análise e Desenvolvimento de Sistemas');
		fc_insere_curso('AGRO','Agronegócio');
		fc_insere_disciplina('ADS', 'LING', 'C# Language', '78h');
		fc_insere_disciplina('ADS', 'WEB', 'PHP', '88h');
		fc_insere_disciplina('AGRO', 'ING', 'INGLES', '77h');
		fc_insere_disciplina('AGRO', 'INFO', 'INFORMATICA', '25h');
		fc_insere_aluno("LING", 9874444, "Carlitos Tevez", "Carlitos2878@uol.com");
		fc_insere_aluno("LING", 8956498, "Jonas Miranda", "joninhas_gamer@gmail.com");
		fc_insere_aluno("LING", 5962654, "Larissa Ortiz", "ortizlara@outlook.com");
		fc_insere_aluno("LING", 5641561, "Jefferson Gabriel", "JEFFIN@hotmail.com");
		fc_insere_aluno("LING", 6541655, "Guizinho do Corre", "guizin157@drake.com");
		fc_insere_aluno("WEB", 5416554, "Johnny Mandrake", "Johnny_mandrake_157@gmail.com");
		fc_insere_aluno("WEB", 77787525, "Vitão Marcos", "vitao_mm@gmail.com.br");
		fc_insere_aluno("WEB", 157692487, "Everson Zóio", "everson_hardcore@bol.com");
		fc_insere_aluno("WEB", 17148798, "Marquinhos Portela", "marcola_p2p@hotmail.com");
		fc_insere_aluno("WEB", 654648687, "Bruna Skatista", "brunask8_choris@hotmaiç.com");
		//Alunos 3
		fc_insere_aluno("ING", 64546785, "Carlos Magno Chorão", "choris_sk8@outlook.com");
		fc_insere_aluno("ING", 46587489, "Luiz Carlos Leão Duarte Júnior", "champignon@gmail.com");
		fc_insere_aluno("ING", 14777827, "Gabriela Luz", "gab_luz@gmail.com");
		fc_insere_aluno("ING", 165468687, "Vanessa Saori", "vanessinha_s@uol.com");
		fc_insere_aluno("ING", 654164687, "Marcia Paula", "paulinha_por@hotmail.com");

		//Alunos 4
		fc_insere_aluno("INFO", 777821582, "Diego Lugano", "Lugano_monstro@hotmail.com");
		fc_insere_aluno("INFO", 154787684, "Luciano Ronaldo", "Luciano_Ronaldo7@gmail.com");
		fc_insere_aluno("INFO", 541465446, "Fernando Diniz", "dinizismo@contato.com");
		fc_insere_aluno("INFO", 447852227, "Vitorino", "vitorino157@outlook.com");
		fc_insere_aluno("INFO", 777785578, "Issei Sagawa", "Issei_Sagawa@hotmail.com");
		
		// Exibindo os dados do curso
		fc_mostra_cursos();

		// Disciplinas do curso 1
		fc_mostra_disciplinas('ADS');

		// disciplinas curso 2
		fc_mostra_disciplinas('AGRO');

		// Alunos disciplina 1, curso 1
		fc_mostra_alunos('LING');

		//Alunos segunda discip l, curso 1
		fc_mostra_alunos('WEB');

		//alunos discip 1, curso 2
		fc_mostra_alunos('ING');

		//alunos segunda disci, curso 2
		fc_mostra_alunos('INFO');

		// exibir array multidim
		fc_mostra_array();

		?>
	</body>
</html>