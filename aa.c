#include <stdio.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <netinet/in.h>
#include <arpa/inet.h>
#include <netdb.h>

int main ( )
{
char Buf [ 200 ] ;
struct hostent * Host;
gethostname ( Buf , 200 ) ;
printf ( "%s\n", Buf ) ;
Host = ( struct hostent * ) gethostbyname ( Buf ) ;
printf ( "The name :: %s\n" , Host->h_name ) ;
printf("IP Address : %s\n", inet_ntoa(*((struct in_addr *)Host->h_addr)));
return 0;
} 

