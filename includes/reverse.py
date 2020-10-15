def reverse(str):
    newString = ""
    for i in range(len(str), 0):
        newString.join(srt[i])
    return newString

print(reverse("String"))