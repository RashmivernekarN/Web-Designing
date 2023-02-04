import java.util.Scanner;
public class Addition
 {
   public static void main(String[] args)
 {
      Scanner s = new Scanner(System.in);
      System.out.println("Enter first number: ");
      int firstNumber = s.nextInt();
      System.out.println("Enter second number: ");
      int secondNumber = s.nextInt();
      int sum = firstNumber + secondNumber;
      System.out.println("The result of addition was " + sum);
   }
} 