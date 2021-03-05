import java.util.Scanner;

public class bounds {
    public static Scanner scanner = new Scanner(System.in);
    
    public static void main(String args[]) {
        System.out.print("Enter starting value: ");
        int start = scanner.nextInt();
        System.out.print("Enter step size: ");
        int step = scanner.nextInt();
        System.out.print("Enter upper bound: ");
        int upBound = scanner.nextInt();
        int count = 0;
        for (int i = start; i < upBound; i += step) {
            if(count != 0 && count % 10 == 0) {
                System.out.println();
            }
            System.out.print(i + " ");
            count++;
        }
    }
}