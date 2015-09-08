f = open('videos2min.sql','r')
g = open('videoClips.csv','w')
myFile = f.readline()
arr = myFile.split(')')
item = 0
pad = 0
for line in arr:
 newline = line.split(',')
 if(len(newline) > 9):
  if(item == 0):
    pad = -1
  g.write(newline[1+pad].replace('(','')+", "+newline[2+pad]+", "+newline[4+pad]+", "+newline[7+pad][:-1])
  item+=1
  pad = 0 
