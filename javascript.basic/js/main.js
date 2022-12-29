var person = {
    name: 'Phát',
    aeg: 25,
    salary: 1000,
}

var arr = [24,12,30,29,34]

//vòng lặp for in duyệt mảng,....
for( var key in person){
    console.log(person[key]);
}

//vòng lặp for of
//Câu lệnh for ... of tạo ra một vòng lặp lặp lại các đối tượng lặp lại (bao gồm cả Array, Map, Set, arguments ...), gọi một móc lặp tùy chỉnh với các câu lệnh để thực thi cho giá trị của từng thuộc tính riêng biệt.
for(var items of arr){
    console.log(items);
}