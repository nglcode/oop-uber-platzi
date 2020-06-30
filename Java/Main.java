class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");

        UberX uberX = new UberX("AMQ123", new Account("Angel Lorenzo", "AND123"), "Chevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        // Car car2 = new Car("QWE567", new Account("Lorenzo Angel", "PLI321"));
        // car2.passenger = 3;
        // car2.printDataCar();

        UberVan uberVan = new UberVan("AFD315", new Account("Kath Katina", "6587123F"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }
}