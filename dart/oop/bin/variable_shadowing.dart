class Person{

   String name = "Guest";
   String? address;
   final String country = "Indonesia";

   // Constructor
   Person(String name, String address){
      name = name; // Field name tidak berubah
      address = address; // Field address tidak berubah
   }
   
}

void main(){

   var person = Person("Eko", "Jakarta");
   print(person.name);
   print(person.address);
   
}

