//class
class Car {
    name: string
    year: number
    constructor (name: string, year: number) {
        this.name = name;
        this.year = year;
    }    
}

let car1 = new Car("Lamborghini",2022)

//short version
class Student {
    constructor (public name:string, readonly year:number){}
}

let student1 = new Student("Linh",2015)

//tính kế thừa
class Animal {
    name: string;
    constructor(theName: string) {
        this.name = theName;
    }

    move(meters: number = 0): string {
        return this.name + " moved " + meters + "m.";
    }
}

class Snake extends Animal {
    constructor(name: string) {
        super(name);
    }

    move(meters = 5): string {
        return super.move(meters);
    }
}

var ranLuc = new Snake("Ran Luc");
ranLuc.move();   // = Ran Luc moved 5 m.
ranLuc.move(34); // = Ran Luc moved 34 m.
