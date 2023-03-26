# Padrão Builder

O	 Padrão	 de	 Projeto	 Builder	 é	 perfeito	 quando	 precisamos
separar	 a	 construção	 de	 objetos	 complexos	 em	 pequenos	 passos,
simplificando-os.	 Como	 desvantagem	 significativa	 de	 adotar	 este
padrão,	 podemos	 destacar	 que,	 quando	 usamos	 em	 uma
determinada	classe	de	produto	 (Product),	sempre	 teremos	outros
objetos	 para	 a	 construção	 de	 nossas	 instâncias,	 o	 que	 pode	 se
tornar	um	problema	em	aplicações	nas	quais	a	performance	é	um
ponto-chave.

Quanto	 às	 vantagens,	 temos	 a	 possibilidade	 de	 separar	 a
definição	das	representações	dos	nossos	produtos,	o	que	facilita	a
manutenção	e	o	desenvolvimento	futuro.	Também	temos	o	código
dessas	 representações	 e	 da	 construção	 totalmente	 encapsulado,	 e,
como	 foi	 dito	 antes,	 temos	 um	 maior	 controle	 das	 etapas	 de
criação	de	um	objeto.
