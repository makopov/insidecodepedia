/**
 * This script will determine if a number is a prime number, run it as so 'cargo run 7'
 */
 
use std::f64;
use std::env;

fn main() {
    let args: Vec<_> = env::args().collect();
    is_prime(args[1].parse::<f64>().unwrap());
}

fn is_prime(number: f64) {
    if number == 2.0 {
        println!("{} is a prime", number);
        return;
    }

    if number <= 1.0 || number % 2.0 == 0.0 {
        println!("{} is not a prime", number);
        return;
    }
    //println!("{}",number.sqrt().ceil());
    for x in 3..number.sqrt().ceil() as i32 + 1 {
        if number % x as f64 == 0.0 {
            println!("{} is not a prime", number);
            return;
        }
    }

    println!("{} is a prime", number);
}