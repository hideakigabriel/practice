float soma = 0;
int i;
for (i = 0; i < 5; i++) {
    // soma a variável o elemento de índice i do vetor
    soma = soma + notas[i];
    // apresenta o elemento de índice i do vetor
    printf ("Nota %d = %.1f\n", i, notas[i]);
}
float media = soma / 5;
printf ("Media das notas = %.1f\n", media);