import java.util.Scanner;

public class Main
{
	public static void main(String[] args) {
	    Scanner input = new Scanner(System.in);
	    
	    System.out.println("------------------------------");
	    System.out.println("----------Welcome------------");
	    System.out.println("------------------------------");
	    System.out.println("For Pizza press 1 ");
	    System.out.println("For Burger press 2 ");
	    System.out.println("For Pasta press 3 ");
	    System.out.println("For Boiled Egg press 4 ");
	    System.out.println("For Exiting System press 0");
	    System.out.println("------------------------------");
	    int x;
		do{
    	    System.out.print("Enter the Item from Menu");
    		x = input.nextInt();
    		switch(x){
    		    case 1: 
    		        System.out.println("Good Choice, Pizza getting Ready ");
    		        break;
    		    case 2: 
    		        System.out.println("Good Choice, Burger getting Ready ");
    		        break;
    		    case 3: 
    		        System.out.println("Good Choice, Pasta getting Ready ");
    		        break;
    		    case 4: 
    		        System.out.println("Good Choice, Boiled Eggs getting Ready ");
    		        break;
    		    default:
    		        System.out.println("Choose from the menu Please");
    		        break;
    		}
		}while (x!=0);
	}
}
