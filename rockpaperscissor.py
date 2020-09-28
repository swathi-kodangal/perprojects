import random
while True:
  print("welcome to rock papper scissor game")
  print("select one of the options:\n"+" 1.Rock\n 2.papper\n 3.scissor\n")
  choice  = int(input("Now your choice"))
  while choice > 3 or choice < 1:
    choice = int(input("enter your valid input here:"))
  if choice == 1:
    optionselected1 = "Rock"
  elif choice == 2:
    optionselected1 = "Paper"
  else:
    optionselected1 = "Scissor"
  print("option u have seleted" + " " + optionselected1)
  print("now its computer turn")
  compchoice = random.randint(1,3)
  #print(compchoice)
  while compchoice == choice:
    compchoice = random.randint(1,3)
    #print(compchoice)
  if compchoice == 1:
     optionselected = "Rock"
  elif compchoice == 2:
    optionselected = "Paper"
  else:
    optionselected = "Scissor"
  print("computers choice" + " " + optionselected)
  if((compchoice == 1 and choice == 2 ) or (compchoice == 2 and choice == 1)):
    result="Paper"
    print("paper wins")
  elif((compchoice == 1 and choice == 3 ) or (compchoice == 3 and choice == 1)):
    result="Rock"+
    print("rock wins")
  else:
    result="Scissor"
    print("scissors wins")
  if optionselected1 == result:
    print("You win")
  else:
    print("Computer wins")
  print("Do you want to play again Yes/No")
  ans = input()
  if ans == "No" :
    break
  print("thank u")
