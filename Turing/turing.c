#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int strings_not_equal(char * a, char * b);

int main(int argc, char ** argv) {
    if (argv[1] == NULL) {
        fputs("password arg needed\n", stdout);
        return 0;
    }
    if (strings_not_equal(argv[1], "name_is_alan")) {
        fputs("wrong password!\n", stdout);
    } else {
        fputs("success!\n", stdout);
    }
}

int strings_not_equal(char * a, char * b) {
    return strcmp(a, b) != 0;
}