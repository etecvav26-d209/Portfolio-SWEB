Algoritmo "areatriangulo"
// Disciplina  :  Programação e algoritmo
// Professor   : Cristiane Fernandes
// Descrição   : Esse algoritmo tem como função calcular a área de qualquer triângulo
// Autor(a)    : Giovanna Manente e Laura Duarte
// Data atual  : 30/07/2026
Var
// Seção de Declarações das variáveis 

base,altura,area:real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...

escreval("Esse algoritmo calculará a área de um triângulo.")
escreval()

escreva("Digite o valor da base em centimetros: ")
leia(base)
escreva("Digite o valor da altura em centimetros: ")
leia(altura)
escreval()

area:=(base*altura)/2

escreval("A área do seu triângulo é: ",area," cm²")

Fimalgoritmo