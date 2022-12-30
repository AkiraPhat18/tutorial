//tính kế thừa
//Kế thừa là khả năng tạo các lớp dựa trên các lớp khác. Với kế thừa, 
//bạn có thể định nghĩa một lớp cha (với các thuộc tính và method nhất định), 
//và sau đó các lớp con sẽ kế thừa từ lớp cha tất cả các thuộc tính và phương thức mà nó có.

class Enemy {
    constructor(power) {
      this.power = power;
    }
  
    attack = () => console.log(`I'm attacking with a power of ${this.power}!`);
  }
  
  class Alien extends Enemy {
    constructor(name, phrase, power) {
      super(power);
      this.name = name;
      this.phrase = phrase;
      this.species = 'alien';
    }
    fly = () => console.log('Zzzzzziiiiiinnnnnggggg!!');
    sayPhrase = () => console.log(this.phrase);
  }
