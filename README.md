# Eval_expr
# Langage : PHP

Le but de ce projet est d’écrire la fonction eval_expr qui doit être prototypée de cette façon :
double eval_expr ( string $expr ) ;
• Cette fonction prend une chaîne de caractères en paramètre, qui représente une expression mathématique. Elle doit évaluer cette expression et retourner le résultat.
• La chaîne passée en paramètre sera toujours valide (pas de problèmes de syntaxe, pas de division par
zéro, pas de pièges. . . ).
• Les opérateurs suivants DOIVENT être supportés :
• ‘+’ pour l’addition.
• ‘-’ pour la soustraction.
• ‘/’ pour la division.
• ’*’ pour la multiplication.
• ‘%’ pour le modulo.
• La fonction doit gérer n’importe quel nombre de parenthèses.