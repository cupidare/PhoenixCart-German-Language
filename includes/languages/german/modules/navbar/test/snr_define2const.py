# coding: utf8
# http://stackoverflow.com/questions/13089234/replacing-text-in-a-file-with-python

import os

# traverse root directory, and list directories as dirs and files as files
rep=[
{
  'define(\'' : 'const ',
  '\', \''    : ' = \'',
  '\');\n':       '\';\n',
  }
]

# replacement strings
WINDOWS_LINE_ENDING = b'\r\n'
UNIX_LINE_ENDING = b'\n'


for replacements in rep:
  for root, dirs, files in os.walk("."):
    path = root.split('/')
    # print((len(path) - 1) * '---', os.path.basename(root))
    for file in files:
      if file.split('.')[-1] == 'php':
        # print(root+'/'+file)
        lines = []
        with open(root+'/'+file) as infile:
          for line in infile:
            for src, target in replacements.items():
              line = line.replace(src, target)
            lines.append(line)
        with open(root+'/'+file, 'w') as outfile:
            for line in lines:
                outfile.write(line)  
        
        #Line-Endings bof
        with open(root+'/'+file, 'rb') as open_file:
          content = open_file.read()
        
        content = content.replace(WINDOWS_LINE_ENDING, UNIX_LINE_ENDING)
        
        with open(root+'/'+file, 'wb') as open_file:
          open_file.write(content)
        #Line-Endings eof

  
# f1 = open('yourBigFile.txt', 'r')
# f2 = open('yourBigFile.txt.tmp', 'w')
# for line in f1:
    # f2.write(line.replace(';', ' '))
# f1.close()
# f2.close()

