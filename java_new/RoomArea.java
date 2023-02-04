//program with multiple classes
class Room
{
    float length;
    float breadth;
    void getdata(float a,float b)
      {
         length=a;
         breadth=b;
       }
}

class RoomArea
{
    public static void main(String args[])
     {
        float area;
        Room r1=new Room();//creation of object
	r1.getdata(14,10);
        area=r1.length*r1.breadth;
        System.out.println("Area="+area);
     }
}    
 