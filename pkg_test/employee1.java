//SUBCLASSING AN IMPORTED CLASS
import pkg1.*;

 class emp3 extends emp2
 {
 	int emp_id1=440;
      int basic1=40000;
     public void display( )
     {
     	 print();
     System.out.println("we are main program  class emp3");
	 System.out.println("emp id="+emp_id1+"\nbasic="+basic1);
	 System.out.println("exit from class emp3");
     }
 }
 class employee1
{
    public static void main(String agrs[ ])
      {
        emp e=new emp();
	 	emp1 e1=new emp1();
	 	emp3 e3=new emp3();
	e.print();		
	e1.print();
	e3.display();
       }
}