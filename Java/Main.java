class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");

        Car car = new Car("AMQ123", new Account("Angel Lorenzo", "AND123"));
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car("QWE567", new Account("Lorenzo Angel", "PLI321"));
        car2.passenger = 3;
        car2.printDataCar();
    }
}