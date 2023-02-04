class evenoddsum
{
    public static void main(String args[ ])
       {
            int esum=0,osum=0;
            int i=1;
            int n=50;
           do
            {
                   if(i%2==0)
                          {
                                 esum=esum+i;                               
                           }
                   else
                            {
                                     osum+=i;
                             }   
	i++;  
             }while(i<=n);
         System.out.println("\nsum of even numbers from 1 to 50 is="+esum);
         System.out.println("\nsum of odd numbers from 1 to 50 is="+osum);
   }
}