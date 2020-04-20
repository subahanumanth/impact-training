<script>
array = [1,2,3,4,5,1,2,3];
set = new Set(array);
set.add(7);
set.delete(7);
console.log(set.size);
console.log(set.has(3));
console.log(set);
</script>
