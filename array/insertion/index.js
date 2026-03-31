let array = [2,3,4,5];
let insertElement = 1;
let n = 0;
for (num of array) {
    n++;
}

for (let i = n - 1; i >= 0; i--){
    array[i+1] = array[i];
}
array[0]=insertElement;
n++;
console.log(array);
console.log(n);