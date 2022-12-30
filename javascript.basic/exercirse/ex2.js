var runningSum = function(nums) {
    const result = [];

    for(let i =0; i < nums.length; i++) {

        const num = nums[i]
        if ( i === 0){
            result.push(nums)
        } else {
            result.push(num + result[ i - 1 ])
        }

    }
    return result;
};