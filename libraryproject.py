class library:

  def __init__(self, list, name):
    self.bookslist = list
    self.name = name
    self.lenddict = {}

  def lendbook(self, user, book):
    if book not in self.lenddict:
      self.lenddict.update({book: user})
      print("books are updated,you can take the book")
    else:
      print(f"book used by{self.lenddict[book]}")

  def displaybooks(self):
    print(f"we have some books:{self.name}")
    for book in self.bookslist:
      print(book)

  def addbooks(self, book):
    self.bookslist.append(book)
    print("book added")


lib = library(["a", "b"], "c++")
print(lib.name)
print("1.displaybooks")
print("2.addbooks")
print("3.lendbook")

user_choice = input()
if user_choice == "1":
  lib.displaybooks()
elif user_choice == "2":
  book = input("enter your book")
  lib.addbooks(book)

elif user_choice == "3":
  user = input("enter your name")
  book = input("enter your book")
  lib.lendbook(user, book)
