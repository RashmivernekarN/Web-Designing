//illustrate DataInputStream class
import java.io.*;
class xyz
{
     public static void main(String args[ ])throws IOException
       {        
      DataInputStream dis = new DataInputStream(System.in);
      System.out.println("Enter  value for a: ");
       String str1 = dis.readLine();
       int a = Integer.parseInt(str1); 
        System.out.println("Enter value for b: ");
       String str2 = dis.readLine();
       int b = Integer.parseInt(str2); 
        System.out.println("Enter value for c: ");
       String str3 = dis.readLine();
       int c = Integer.parseInt(str3); 
        if(a>b&&a>c)
             System.out.println(a+"is BIG");
     else if( b>a&&b>c)
           System.out.println(b+"is big");
     else if( c>a&&c>b)
           System.out.println(c+"is big");
         else
        System.out.print("not possible to say which is big");
     }
}