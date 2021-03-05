public class alphabet {
    public static void main(String args[]) {
        for (char letter = 'a'; letter <= 'z'; letter++) {
            System.out.print(letter);
            if (letter == 'a' || letter == 'e' || letter == 'i' || letter == 'o' || letter == 'u') {
                System.out.println(" vowel");
            }
            else {
                System.out.println(" consonant");
            }
        }
    }
}
