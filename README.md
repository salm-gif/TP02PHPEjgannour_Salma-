# TP02PHPEjgannour_Salma-
TP 02 PHP-Programming web 2-2026/2027
## Exercice 2 : Explication sur les variables PHP

### Pourquoi `$note` et `$Note` sont différentes ?
En PHP, les noms de variables sont **sensibles à la casse** (case-sensitive). Cela signifie que `$note` et `$Note` sont traitées comme deux variables totalement distinctes en mémoire.

### Identification des noms de variables valides et invalides :
- `$a` : **Valide** (commence par une lettre)
- `$_a` : **Valide** (commence par un tiret bas `_`)
- `$a_a` : **Valide** (contient des lettres et un tiret bas)
- `$AAA` : **Valide** (contient des majuscules)
- `$a!` : **Invalide** (le caractère spécial `!` n'est pas autorisé)
- `$1a` : **Invalide** (ne peut pas commencer par un chiffre)
- `$a1` : **Valide** (contient un chiffre après une lettre)