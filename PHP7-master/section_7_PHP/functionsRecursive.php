<?php 
	$hierarquia = [
		[
			'nome_cargo'	=> 'CEO',
			'subordinados'	=> [
				//Diretor Comercial
				[ 
					'nome_cargo'	=> 'Diretor Comercial',
					'subordinados'	=> [
						//Gerente de Vendas
						['nome_cargo'	=> 'Gerente de Vendas']
						//Termino: Gerente de Vendas
					]
				],
				//Termino: Diretor Comercial

				//Diretor Finaceiro
				[
					'nome_cargo'	=> 'Diretor Finaceiro',
					'subordinados'	=> [
						//Gerente de contas a pagar
						[
							'nome_cargo'	=> 'Gerente de contas a pagar',
							'subordinados'	=> [
								//Supervisor de contas a pagar
								[
									'nome_cargo'	=> 'Supervisor de contas a pagar'
								]
								//Termino: Supervisor de contas a pagar
							]
						]
						//Termino: Gerente de contas a pagar
					]
				],
				//Termino: Diretor Finaceiro

				//Gerente de Compras
				[
					'nome_cargo'	=> 'Gerente de Compras',
					'subordinados'	=> [
						//Supervisor de suprimentos
						[
							'nome_cargo'	=> 'Supervisor de suprimentos',
							'subordinados'	=>	[
								[
									'nome_cargo'	=> 'Funcionários'
								]
							]
						]
						//Termino: Supervisor de suprimentos
					]
				]
				//Termino: Gerente de Compras
			]
		]
	];

	function show($cargos) {
		$html = '<ul>';
			foreach ($cargos as $itemCargos) {
				$html .= '<li>';
				$html .= $itemCargos['nome_cargo'];
					if(isset($itemCargos['subordinados']) && count($itemCargos['subordinados']) > 0)
					{
						$html .= show($itemCargos['subordinados']);
					}
				$html .= '</li>';
			}
		$html .= '</ul>';

		return $html;
	}

	echo show($hierarquia);
?>