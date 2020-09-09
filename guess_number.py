import random
while True:
 print("hi user guess a number")
 guess_number = int(input("please enter a number between 0 to 10:"))
 print(guess_number)
 print("now its computer turn")
 comp_number = random.randint(0,10)
 print(comp_number)
 if comp_number == guess_number:
    print("u have guessed the correct number")
 else:
    print("pls try again")
 print("do u want to play again y/n:")
 ans = input()
 if ans == "N" or ans =="n":
    print("thank u for playing")
    break

