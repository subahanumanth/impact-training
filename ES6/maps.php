<script>
obj = {};
a = {};
b = {};
obj[a] = "1";
obj[b] = "2";
console.log(obj);

map = new Map([[a,1],[b,2]]);
//map = new Map([["name","hanu"],["age",20]]);
map.set(1,3);
map.delete(a);
console.log(map.size);
console.log(map.has(b));
console.log(map);

</script>
