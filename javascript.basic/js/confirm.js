function deleteProduct(confirmResult){
    let message;

    //rút gọn kiểu == true
    if(confirmResult){
        message = 'The product is deleted';
    }else{
        message = 'No product is deleted';
    }
    return message
}

let  confirmResult = confirm('Do you want to delete');

let msg = deleteProduct(confirmResult);

alert(msg);