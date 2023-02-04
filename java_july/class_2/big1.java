//program to illustrate if else

class big1
{
     public static void main(String args[])
       {
         int a,b,c;
        a=10;
        b=12;
        c=15;
        if(a>b&&a>c)
             System.out.println(a+"is BIG");
     else if( b>a&&b>c)
           System.out.println(b+"is big");
     else if( c>a&&c>b)
           System.out.println(c+"is big");
     }
}