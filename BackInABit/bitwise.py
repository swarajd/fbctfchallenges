#!/usr/bin/env python

password = raw_input("Enter Password: ")

if len(password) != 10:
  print "Wrong"
  exit()


verify_arr = [35, 195, 35, 66, 225, 129, 73, 1, 9, 33]
user_arr = []
for char in password:
  # '<<' is left bit shift
  # '>>' is right bit shift
  # '|' is bit-wise or
  # '^' is bit-wise xor
  # '&' is bit-wise and
  user_arr.append( (((ord(char) << 5) | (ord(char) >> 3)) ^ 111) & 255)

print(user_arr)
if (user_arr == verify_arr):
  print "Success"
else:
  print "Wrong"