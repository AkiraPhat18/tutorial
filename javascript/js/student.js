let student = new Object()

student.hoTen =  prompt('Nhập họ và tên: ')
student.dtb = prompt('Nhập điểm trung bình: ')


student.hienThi = function () {
    document.writeln(`<h1>Họ Tên : ${this.hoTen} </h1>`)
    document.writeln(`<h1>Điểm trung bình : ${this.dtb} </h1>`)

}

if (this.dtb < 5 ){
    document.writeln('<h1>Kết quả : Rớt</h1>')
}else{
    document.writeln('<h1>Kết quả : Đậu</h1>')
};
student.hienThi();


