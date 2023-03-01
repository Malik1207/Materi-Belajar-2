 class Computer{
   
   // void startup() {
   //    print('Computer is starting');
   // }

   void startup()  => print('Computer is starting');
   void shutdown() => print('Computer is shutting down');

   // String getOperatingSystem(){
   //    return "linux";
   // }

   String getOperatingSystem() => "linux";
   
 }

 void main(){

   var computer = Computer();
   computer.startup();
   computer.shutdown();
   print(computer.getOperatingSystem());
   
 }