from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola Mundo")

    car = Car("AMS234", Account("Angel Lorenzo", "AND876"))
    print(vars(car))
    print(vars(car.driver))

