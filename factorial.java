import java.util.Scanner;
public class factorial {
    public static Scanner scan = new Scanner(System.in);
    public static void main(String args[]) {
        int n = 0;
        char cont;
        do {
            System.out.print("Enter in N: ");
            n = scan.nextInt();
            for (int num = n-1; num > 0; num--) {
                n*=num;
            }
            System.out.println("Factorial: " + n);
            System.out.print("Do you want to continue? (y/n): ");
            cont = scan.next().charAt(0);
            /*switch (conttf) {
                case "y": case "Y": cont = true;
                break;
                default: cont = false;
                break;
            }*/
        } while (cont == 'y');
        System.out.print("Have a good day");
    }
}
