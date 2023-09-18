public class Main
{
	public static void main(String[] args) {
	    System.out.println("------------------");
	    int studentID = 6;
	    do{
	        System.out.println("Student present with ID " +  studentID);
	        studentID++;
	    }while (studentID <= 5);
	
	    System.out.println("------------------");
	    studentID = 6;
	    //reset the number
	    while(studentID <= 5){
	        System.out.println("Student present with ID " +  studentID);
	        studentID++;
	    }
	
	}
}
