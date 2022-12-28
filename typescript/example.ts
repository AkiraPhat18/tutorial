// class Vehicle {
//     name: string;
//     brand: string;
//     constructor (name: string, brand: string) {
//         this.name = name;
//         this.brand = brand;
//     }

//     info() {
//       return "Name: " + this.name + ", brand: " + this.brand;
//     }

//     start() {
//         return this.brand + " " + this.name + " is runing.";
//     }
// }

// let bugati = new Vehicle("Veyon", "Bugati");
// bugati.start();


//khai báo typescript sử dụng cấu trúc: var tên biến: kiểu trả về = giá trị biến
//khai báo mảng tương tự như khai báo biến 
//Enum: khi khai báo enum một cách thông thường các phần tử sẽ được đánh số từ 0 và tăng dần
/*enum Color{Red, Green, Blue};
var c: Color = Color.Green
var colorName = Color[1]*/ // kết quả sẽ là Green

var foo = 123;
if (true) {
    var foo = 456;
}
console.log(foo); // 456
