package com.company;
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner input= new Scanner(System.in);
        System.out.print("Enter any integer : ");
        int num1 = input.nextInt();

        int result = sumDecimals(num1);
        System.out.println("the number: "+num1+ "the Sum is " + result);
    }
    public static int sumDecimals(int x){ // 2 4 5 7
        int num2 = 0, sum = 0;
        while (x > 0) {
            num2 = (x % 10); // num = 2 % 10 = 2
            sum = sum + num2; //  sum = 7 + 5 = 12 + 4 = 16 + 2 = 18
            x = x / 10; // x = 24 / 10 = 2 / 10 = 0
        }
        return sum;
    }
}