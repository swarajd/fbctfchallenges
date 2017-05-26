#include <stdio.h>
#include <stdlib.h>

int enigma(char* str);

int main(int argc, char** argv) {

    if (argv[1] == NULL) {
        fputs("password arg needed\n", stdout);
        return 0;
    }
    enigma(argv[1]);

    return 0;
}

int enigma(char* str) {
    int vals [ 8 ] = { 5, 3, 1, 4, 6, 2, 7, 0};
                     //0, 1, 2, 3, 4, 5, 6, 7
    char string [ 8 ] = {'i', 'n', 'd', 'e', 'f', 'c', 'o', 'n'};
    int idx = 0;

    while (idx < 8) {
        if (str[idx] != string[vals[idx]]) {
            return 0;
        }
        idx++;
    }

    printf("success!\n");
    return 0;
}