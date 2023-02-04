//creation of thread by using Runnable interface

class X implements Runnable
{
   public void run()
    {
       for(int i=1;i<=10;i++)
        {
           
        System.out.println("Thread X:i="+i);

        }
      System.out.println("end of threadX");
    }
}

class RunnableTest
{
   public static void main(String args[])
    {
      X runnable=new X();//creating object name runnable
      Thread t1=new Thread(runnable);
       t1.start();
   System.out.println("end of main");
}
}
     
