# File: CaeserDecipher.py

ctext = str(input("please enter the text you want to decipher"))
text=""
alphabet="abcdefghijklmnopqrstuvwxyz"
key=3

for L in text:
	if L in alphabet:
		text += alphabet[(alphabet.index(L) - key)%26]
	else:
		text += L

print("your deciphered text is :" + text)