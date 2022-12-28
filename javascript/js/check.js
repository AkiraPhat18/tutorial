let num =  prompt('Enter a number: ');//hàm prompt gọi giá trị do người dùng nhập vào

if(isNaN(num)){
    alert(`The value ${num} is not a number`);
}else{
    alert(`The value ${num} is a number`);
}