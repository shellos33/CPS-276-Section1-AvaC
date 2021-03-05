import java.util.Scanner;
public class factorial {
    public static Scanner scan = new Scanner(System.in);
    public static void main(String args[]) {
        String cont = "";
        do {
            System.out.print("Enter in N: ");
            int n = scan.nextInt();
            for (int num = n-1; num > 0; num--) {
                n*=num;
            }
            System.out.println("Factorial: " + n);
            System.out.print("Do you want to continue? (y/n): ");
            cont = scan.next();
        }
        while(cont == "y" || cont == "Y");
    }
}
