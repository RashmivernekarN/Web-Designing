//interafece illustration
interface Area
{
    final static float pi=3.142f;
     float compute(float x,float y);
}
class Rectangle implements Area
{
    public  float compute(float x,float y)
       {
           return(x*y);
        }
}
class Circle implements Area
{
    public  float compute(float x,float y)
       {
           return(pi*x*y);
        }
}
class interfeceTest
{
      public static void main(String agrs[])
          {
                Rectangle rect=new Rectangle();
                 Circle cir=new Circle();
                   Area area;//interface object
                  area=rect;
                System.out.println("area of rectangle="+area.compute(10,20));
                area=cir;
                System.out.println("area of circle="+cir.compute(4,2));
       }
}

     