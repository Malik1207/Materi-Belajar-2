void main(){
   String firstName = 'Abdul';
   String lastName  = "Malik";

   print(firstName);
   print(lastName);

   // String Interpolation
   var fullName = '$firstName ${lastName}';
   print(fullName);

   var text = 'This is \'dart\' \$cool';
   print(text);

   var name1 = firstName + " " + lastName;
   var name2 = 'Abdul ' 'Malik';

   print(name1);
   print(name2);

   var longString = '''
      This is long string
      multiline string
      learning dart
   ''';

   print(longString);
}