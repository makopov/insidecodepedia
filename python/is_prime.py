import sys
import math

if len(sys.argv) == 1:
    print 'Pass in a number on the command line to determine if its a prime'
    sys.exit()

number = int(sys.argv[1])

if number == 2:
    print 'Prime'
    sys.exit()

if ((number % 2) == 0) or (number <= 1):
    print 'Not a prime'
    sys.exit()

for i in range(3, int(math.ceil(math.sqrt(number)))+1):
    if(number % i) == 0:
        print 'Not a prime'
        sys.exit()

print 'Prime'
