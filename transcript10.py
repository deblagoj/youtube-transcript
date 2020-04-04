from urllib.parse import urlparse
import sys
#print('11111')
import sys
print(sys.path)
#print(' /n version')
print(sys.version)
#print('/n version info')
print(sys.version_info)
from youtube_transcript_api import YouTubeTranscriptApi
#print('22222')

import logging
#logging.basicConfig(filename='example.log',level=logging.DEBUG)
#logging.debug('This message should go to the log file')
#logging.info('So should this')
#logging.warning('And this, too')

#print ('This is the name of the script: ', sys.argv[0])
#print ('Number of arguments: ', len(sys.argv))
#print ('The arguments are: ' , str(sys.argv))
o=str(sys.argv[1])
#print('    ******')
#print(o)

#o=urlparse('https://www.youtube.com/watch?v=E3URhJx0NSw&t')
#URL=urlparse(o).query[2:]

URL='E3URhJx0NSw'
#URL='PmYypVozQb4'
print(URL)



dataset=YouTubeTranscriptApi.get_transcript(URL)
#print('DATAAAAAAAATAAAAASEEEEETT')
#print('the list lenght', len(dataset))
#print(dataset[0:100])
#dataset=dataset[0:4]

#print( dataset)

print ('999')
#T[3]
text_list=[d['text'] for d in dataset]

import re 

def concatenate_list_data(list):
	result= ''
	for element in list:
		f=re.sub('[^A-Za-z0-9]+', ' ', str(element))
		result += f+' '
	return result


print(concatenate_list_data(text_list))
#return concatenate_list_data(text_list)
#print('55555')
