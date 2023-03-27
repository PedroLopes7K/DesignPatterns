# Padrão Adapter

O	 maior	 benefício	 do	 Adapter	 é	 permitir	 que	 diferentes
interfaces	 se	 comuniquem	 quando	 se	 tem	 a	 necessidade	 de
conectar	 duas	 partes	 do	 sistema	 em	 que	 não	 devemos	 efetuar
alterações;	ou	quando	temos	o	objetivo	de	efetuar	uma	troca	futura
de	partes	do	nosso	sistema,	sem	que	nosso	cliente	seja	alterado.

Com	 o	 uso	 do	 Adapter,	 é	 possível	 inserir	 um	 terceiro	 elemento
que	 fica	 entre	 classes	 que	 queiram	 se	 comunicar.	 Este	 é	 um
adaptador	 que	 faz	 essa	 comunicação	 entre	 interfaces
incompatíveis.