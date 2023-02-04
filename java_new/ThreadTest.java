//Creation of thread using thread class

class  A extends Thread
{
   public void run()
     {
        for(int i=1;i<=5;i++)
       {
       System.out.println("from threadA: i="+i);
       }
     System.out.println("exit from threadA");
     }
}
class  B extends Thread
{
   public void run()
     {
        for(int j=1;j<=5;j++)
       {
       System.out.println("from threadB: j="+j);
       }
 System.out.println("exit from threadB");
     }
} 
 class  C extends Thread
{
   public void run()
     {
        for(int k=1;k<=5;k++)
       {
       System.out.println("from threadC: k="+k);
       }
 System.out.println("exit from threadC");
     }
}
class ThreadTest
{
   public static void main(String args[])
     {
         A t1=new A();
         t1.start();
         B t2=new B();
         t2.start();  
         C t3=new C();
         t3.start();    
       }
} 

