// ------- BASIC TYPE ---------

//string
let firstname = "Akira"
let lastname:string

lastname = "Phat"

//number
let age1 :number;
age1 = 30

//boolean
let isValid  = true;

isValid =  false;
console.log(isValid);

// KDL enum
//cố định 1 dải màu
enum Color {Red, Green, Blue}
var c: Color = Color.Green;
let color = Color.Blue

// KDl tuple - kieu du lieu hon tap

var x: [string, number];

x = ['ahihi', 10];
for (let i = 0; i < x.length; i++) {
    console.log(x[i]);    
}
console.log(x[0]);

// KDL any

var xyz : any;
xyz = 'ahihi';
console.log(xyz);