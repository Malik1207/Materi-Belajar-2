void main() {
   // String name;
   // name = "Abdul Malik";
   // print(name);

   // var name = "Abdul Malik";
   // print(name);
   // print(name);

   // name = "Mustaqim";
   // print(name);
   // print(name);

   // Kata kunci Final
   // var firstName = "Abdul";
   // final lastName = "Malik";
   // firstName = "Joko";
   // lastName = "Widodo"; /// Tidak bisa dirubah

   // print(firstName);
   // print(lastName);

   // final array1 = [1,2,3];
   // const array2 = [1,2,3];

   // array1 = [0,0,0]; /// Tidak bisa dideklarasikan ulang
   // array1[0] = 10; /// Isinya bisa diubah

   // array2 = [0,0,0]; /// Tidak bisa dideklarasikan ulang
   // array2[0] = 10; /// Isinya tidak bisa diubah
   
   // print(array1);
   // print(array2);
   
   late var value = getValue();
   print('Variable sudah dibuat');
   print(value);
}

String getValue() {
   print('getValue() dipanggil');
   return 'Eko Kurniawan Khaneddy';
}