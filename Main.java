public class MinumanSegar {
    public static void main(String[] args) {
         Scanner in = new Scanner (System.in);
         String a;
         int hargaminuman =0, uang;
         
         System.out.println("Pilihlah Minuman Anda: ");
         System.out.println("1. Matcha");
         System.out.println("2. Lechy Tea");
         System.out.println("3. Red Velvet");
         System.out.println("4. Taro");
         System.out.println("5. Chocolate");
         System.out.println("--------------------");
         a = in.next ();
         
         System.out.println("Harga Minuman Yang Anda Pilih: ");
         switch (a){
             case "1":
                 System.out.println("Rp. 12.000"); hargaminuman = 12000; break;
             case "2":
                 System.out.println("Rp. 10.000"); hargaminuman = 10000; break;
             case "3": 
                 System.out.println("Rp. 15.000"); hargaminuman = 15000; break;
             case "4":
                 System.out.println("Rp. 13.000"); hargaminuman = 13000; break;
             case "5":
                 System.out.println("Rp. 14.000"); hargaminuman = 14000; break;
             default:
                 System.out.println("Maaf menu tidak tersedia");
         }
         System.out.println("Masukkan uang anda: ");
         uang = in.nextInt();
         if (uang>=hargaminuman) {
             System.out.println("Uang kembalian anda: "+ (uang-hargaminuman));
         } else {
             System.out.println("Mohon maaf uang anda kurang ");
         }
    }
   
    
