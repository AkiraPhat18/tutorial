var framgia = ["div1", "div2", "div3"];

// Thuộc tính chỉ số :
console.log(framgia[1]);
//=> "div2"

framgia[3] = "div4";
console.log(framgia);
//=> ["div1", "div2", "div3", "div4"]

// Thuộc tính tích hợp (có thể gọi bằng object.key hoặc là object["key"]):
console.log(framgia.length);
//=> 4

console.log(framgia["length"]);
//=> 4
