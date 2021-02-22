/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author ACER
 */
import java.util.Scanner;
public class index {
    public static void main(String[]args){
        int tahun;
        Scanner input= new Scanner(System.in);
         tahun= input.nextInt();
        if(tahun % 400==0)
        {
            System.out.println("Tahun Kabisat");
        }
        else if(tahun %4==0 && tahun % 100!=0)
        {
          System.out.println("Tahun Kabisat");  
        }
        else
        {
            System.out.println("bukan tahun kabisat");
        }
    }
    
}
