class matrix
{
   public static void main(String args[])
      {
        int a[][]={10,20,30,40};
        int b[][]={10,20,30,40};
        int s[][]=new int[2][2];
       
	//a[][]={10,20,30,40};
        //b[][]={11,22,33,44};
         System.out.println("sum of elements of the matrix\n");
         for(int i=0;i<2;i++) 
               for(int j=0;j<2;j++)
                 s[i][j]=a[i][j]+b[i][j]; 
          for(int i=0;i<2;i++) 
          {
               for(int j=0;j<2;j++)
			{
                  System.out.println("s[i][j]");
                 }
             
               System.out.println();  
         }
}
}