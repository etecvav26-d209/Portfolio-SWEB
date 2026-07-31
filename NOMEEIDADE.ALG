Algoritmo "nomeeidade"
// Disciplina  :  Programação e algoritmo
// Professor   : Cristiane Fernandes
// Descrição   : Esse algoritmo tem como função calcular a área de qualquer triângulo
// Autor(a)    : Giovanna Manente e Laura Duarte
// Data atual  : 30/07/2026

Var
// Seção de Declarações das variáveis 
nome: caracter
idade,result: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval ("Este algoritmo exibe nome e idade em anos, meses, semanas, dias e horas.")
  escreval()
escreva ("digite o nome: ")
leia (nome)

escreva ("digite a idade em anos: ")
leia (idade)

escreval ("Nome: ",nome)
escreva ("idade: ")
escreval (idade, " anos.")

result:= idade*12
escreval (result, " meses.")

result:= idade*52
escreval (result, " semanas.")

Fimalgoritmo