from subprocess import call
import re
import os

#compare.txt contains the full list of sites. data.txt contains the email to be searched. socials.txt contains the raw o/p of sscan
#socials2.txt contains a cleaned socials.txt via grep
#finallist.txt contains the negative join of socials2.txt and compare.txt

# call(["socialscan --input -na ", "data.txt"])
# os.system('touch finallist.txt')
os.system('socialscan --platform github spotify lastfm pastebin pinterest twitter instagram -a --input data.txt > socials.txt')




os.system('grep -e Instagram -e GitHub -e Lastfm -e Pastebin -e Spotify -e Twitter -e Pinterest socials.txt > socials2.txt')

os.system('sort -o socials2.txt socials2.txt')
os.system('sort -o compare.txt compare.txt')

os.system('join -v 1 compare.txt socials2.txt > finallist.txt')

# os.system('comm -23 socials2.txt compare.txt > finallist.txt')
# os.system('grep -Fvxf compare.txt socials2.txt')

# thefile = open("socials.txt", "r")

# def check():
#     with open('socials.txt') as f:
#         datafile = f.readlines()
#         found = False
#         for line in datafile:
#             if Instagram in line:
#                 pass
#             else:
#                 os.system('cat finallist.txt "Instagram"')


# os.system('socialscan --platform github spotify lastfm pastebin pinterest twitter instagram -a --input data.txt > socials.txt')
