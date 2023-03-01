class Person {

   // Field
   String name = "Guest";
   String? address;
   final String country = "Indonesia";

   // Method
   void sayHello(String paramName){
      print('Hello $paramName, My name is $name');
   }

   void hello(){
      print('Hello, my name is $name');
   }

}

extension SayGoodByeOnPerson on Person {

   void sayGoodBye(String paramName){
      print('Good bye $paramName, from $name');
   }
   
}

void main(){
   
   var person1 = Person();
 
   person1.name    = "Abdul Malik";
   person1.address = "Kalimantan";
   // person1.country = "Saudi Arabia"; // Tidak bisa mengubah final field 
   
   print(person1.name);
   print(person1.address);
   print(person1.country);
 
   person1.sayHello("Budi");
   person1.hello();
   person1.sayGoodBye("Qodir");
   
}