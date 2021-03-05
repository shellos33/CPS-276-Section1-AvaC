import java.util.Scanner;
public class temperature {
    public static Scanner scan = new Scanner(System.in);
    public static void main(String args[]) {
        double cel = 0;
        double far = 0;
        double celTotal = 0;
        double farTotal = 0;
        int count = 0;
        while (cel > -100) {
            System.out.println("Enter <= -100 to exit");
            System.out.print("Enter a temperature in Celcius: ");
            cel = scan.nextDouble();
            if (cel > -100) {
                far = (9.0 / 5.0) * cel + 32.0;
                celTotal += cel;
                farTotal += far;
                count++;
                System.out.println("Fahrenheit: " + far);
            }
        }
        System.out.print("Average: Celcius " + ((celTotal)/count) + " ");
        System.out.print("Average: Fahrenheit " + (farTotal)/count);
    }
}
