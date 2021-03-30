#include <stdio.h>
#include <unistd.h>
char ft_putstr( char *str)
{
int i = 0;
while ( str[i] !='\0' && str[i]!='\t' && str[i]!=' ' ) ++i;
write (1, str, i);
return (0);
}

int main ( int argc, char **argv)
{
if ( argc >= 1) ft_putstr( argv[1]);
write (1, "\n", 1);
return(0);
}
				