/**
 * This program will determine if a number is a prime number, to run:
 * g++ is_prime.cpp -o is_prime
 * ./is_prime 7
 */
#include <iostream>
#include <math.h>
using namespace std;

int main(int argc, char *argv[]) {
  if(argc == 1) {
    cout << "No number passed in as paramter" << endl;
  }

  int number = *argv[1] - '0';

  if(number == 2) {
    cout << "Prime";
    return 0;
  }

  if(number <= 1 || (number % 2) == 0) {
    cout << "Not a prime";
    return 0;
  }

  for(int i = 1; i <= ceil(sqrt(number)); i++) {
    if((number % i) == 0) {
      cout << "Not a prime";
      return 0;
    }
  }

  cout << "Prime";
  return 0;
}
