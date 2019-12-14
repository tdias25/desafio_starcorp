# Desafio Starcorp

### Challenge - Backend Developer

Using SOLID principles, write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print “StarCorp”. For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print “StarCorpianos”.


But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.


# Requirements

* 1 if

* You can't use `else`, `else if` or ternary

* Unit tests


### Observações

Usei o PSR-4 para criar a estrutura de classes e namespaces, e fiz todos os testes em um único arquivo, localizado em `tests/Numbers/MultiplesTest.php`, a estrutura de pastas é a seguinte:
	
	/src/ => StarCorp
		/Numbers
			MultipleOf3.php
			MultipleOf5.php
			MultipleOf3e5.php
	/tests
		/Numbers
		MultiplesTest.php

- Segui como senão pudesse usar mais de 1 (um) controle de condicinais além do if (switch)