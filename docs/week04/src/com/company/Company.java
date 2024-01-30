package com.company;
public class Company {
    public static void main(String[] args) {
	Employee obj1 = new Employee();
    obj1.printAll();

    Employee obj2 = new Employee("Salam",2000,0.15);
    obj2.printAll();

    Employee obj3 = new Employee();
    obj3.setName("Salma");
    obj3.setSalary(1200);
    obj3.setBonus(0.2);
    obj3.printAll();
    }
}

class Employee{
    Employee(){
        this.name = "No-Name";
        this.salary = 0;
        this.bonus = 0;
    }
    Employee(String givenName, double givenSalary, double givenBonus){
        this.name = givenName;
        this.salary = givenSalary;
        this.bonus = givenBonus;
    }
    private String name;
    private double salary;
    private double bonus;
    public void setName(String nameNew){
        this.name = nameNew;
    }
    public void setSalary(double newSalar){
        this.salary = newSalar;
    }
    public void setBonus(double newBonus){
        this.bonus = newBonus;
    }
    public String getName(){
        return this.name;
    }
    public double getSalary(){
        return this.salary;
    }
    public double totalSalary(){
      return this.salary
              + (this.bonus * this.salary);
    }
    public void printAll(){
        System.out.println(this.name + " has " + this.salary
                + " and his total salary is " + this.totalSalary());
    }
}