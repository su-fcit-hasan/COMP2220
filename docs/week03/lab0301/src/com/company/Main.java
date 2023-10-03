package com.company;
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        int result = max();
        System.out.println("Max is  " + result);
    }
    public static int max()    {
        Scanner input= new Scanner(System.in);
        System.out.print("Enter integers : ");
        int num = 0;
        int max = 0;
        do{
            num = input.nextInt();
            if (num > max)
                max = num;
        }while(num != 0);
        return max;
    }
}