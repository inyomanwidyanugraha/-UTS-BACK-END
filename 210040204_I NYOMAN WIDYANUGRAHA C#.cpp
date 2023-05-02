//NAMA : I NYOMAN WIDYANUGRAHA
//NIM  : 210040204
//KELAS: BA214
//KONSEP DASAR PEMROGRAMAN

#include <stdio.h>

int main() {

    //FL-01
    printf("SELAMAT DATANG DI APLIKASI KALKULATOR SEDERHANA (x + y = z)\n\n");

    //FL-02
    int x;
    int y;
    int z;

    //FL-03
    printf("Masukkan Nilai  x : ");

    //FL-04
    scanf("%d", &x);

    //FL-05
    printf("Masukkan Nilai y : ");

    //FL06
    scanf("%d", &y);

    //FL-07
    z = x + y;

    //FL-08
    printf("Hasil Penjumlahan adalah: %d\n", z);


    //FL-09
    printf("Masukkan nilai hasil penjumlahan yang akan duji: ");

    //FL-10
    scanf("%d", &x);

    //FL-11
    if (x % 2 == 0){
        //FL-12
        printf("Ini Genap\n");

    } else {
       //FL-13
       printf("Ini Ganjil");
    }

    return 0;
}
