package com.company;
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int[] numbers = new int[10];
        System.out.println("Enter 10 integers:");
        for (int i = 0; i< 10 ;i++){
            numbers[i] = input.nextInt();
        }
        double average = calculateAverage(numbers);
        System.out.println("The average of the even values in the array is: " + average);
    }
    public static double calculateAverage(int[] numbersArray) {
        int sum = 0;
        int count = 0;
        for (int number : numbersArray) {
            if (number % 2 == 0) {
                sum += number;
                count++;
            }
        }
        return (double) sum / count;
    }
}