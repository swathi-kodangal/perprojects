thislist = ["apple", "banana", "cheery", "watermelon", "pineapple"]
print(thislist[2])
print(thislist[-1])
print(thislist[1:4])
print(thislist[0:])
thislist[1] = "orange"
print(thislist)
for x in thislist:
    print(x)
if "apple" not in thislist:
    print("true")
print(len(thislist))
thislist.append("papaya")
print(thislist)
thislist.insert(1, "mango")
print(thislist)
thislist.remove("papaya")
thislist.pop()
del thislist[0]
#thislist.clear()
print(thislist)
mysecondlist = thislist.copy()
print(mysecondlist)
listt = thislist + mysecondlist
print(type(listt))
x = listt.count("orange")
print(x)

thistuple = ("dairymilk","milkybar", "lays", "kurkure")
print(thistuple)
print(thistuple[1])
print(thistuple[-1])
print(thistuple[1:3])
mylist = list(thistuple)
mylist[1] = "dark choclate"
thistuple = tuple(mylist)
print(thistuple)
for x in thistuple:
    print(x)
if "dairymilk" in thistuple:
    print("yes it exists")
print(len(thistuple))
thistuple1 = ("kkkk",)
print(type(thistuple1))
mytup = thistuple1 + thistuple
print(mytup)
del mytup
myset = {"apple", "orange", "bnana"}
print(myset)
for x in myset:
    print(x)
myset.add("mirinda")
print(myset)
myset.update(["bbb", "kkk"])
print(len(myset))
myset.discard("bbb")
myset.pop()
print(myset)
myset1 = {"apple","2","3"}
set7  = myset.union(myset1)
print(set7)
u = myset.difference(myset1)
print(u)
mydict = {"name":"swathi","kkk":"jjjj"}
print(mydict["name"])
x = mydict.get("name")
print(x)
mydict["name"] = "sandhya"

for x,y in mydict.items():
    print(x)
    print(y)
print(len(mydict))
mydict["njnj"] = "jjj"
mydict.popitem()
mydict.clear()
print(mydict)
