var a=[];
var arr=[5,10,1,2,1,4];
var n=arr.length;
for(var i=0;i<n;i++){
    var outp=1;
    for(var j=0;j<n;j++){
        if(i!=j){
            outp =outp*arr[j];
        }
    }
    a.push(outp);
}
console.log(a);
