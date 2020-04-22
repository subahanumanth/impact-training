<script>
class People {
constructor(name) {
      this.name = name;
    }
    get Name() {
      return this.name;
    }
    set Name(name) {
      this.name = name;
    }
}
let person = new People("Hanu");
console.log(person.Name);
person.Name = "Suba";
console.log(person.Name);
</script>
