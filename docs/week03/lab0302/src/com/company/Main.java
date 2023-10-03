package com.company;
import java.util.Scanner;
import java.lang.*;
public class Main {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the binary value (0,1) : ");
        int bin = input.nextInt();
        int decimal = binaryToDecimal(bin);
        System.out.println("Binary : "+bin+" = decimal : "+decimal);
    }// end main method
    public static int binaryToDecimal (int x){
        int num , i = 0, sum = 0; //i is the power
        while (x > 0) {
            num = (x % 10); // to split digits
            num = num * (int) Math.pow(2,i);
            sum = sum + num;
            x = x / 10; // x is the remaining digits of the binary number
            i++;
        }
        return sum;
    }//end binaryToDecimal method
}// end classe