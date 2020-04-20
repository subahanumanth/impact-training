<script>
var promise = new Promise(function(resolve, reject) {
    reject('Promise Rejected')
})

promise.then(function(successMessage) {
        console.log(successMessage);
    }, function(errorMessage) {
        console.log(errorMessage);
    })
var promise = new Promise(function(resolve, reject) {
        resolve('Promise Accepted')
  })
promise.then(function(successMessage) {
    console.log(successMessage);
    }, function(errorMessage) {
          console.log(errorMessage);
  })
</script>
