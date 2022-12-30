//function

//return value
const sum = (a , b) => {
    return a + b;
}

sum("hello",2)

const sum2 = (num1:number , num2:number ) : number => {
    return num1 + num2
}
sum2(20,30);

//string
function buildName(firstName: string, lastName = "Smith") {
    return firstName + " " + lastName;
}

var result1 = buildName("Bob");  //làm việc hoàn toàn OK. buildName("bob") = "bob Smith"
//var result2 = buildName("Bob", "Adams", "Sr.");  //error, too many parameters
var result3 = buildName("Bob", "Adams");  //ah, just right
