from urllib.parse import urlparse
import sys

from youtube_transcript_api import YouTubeTranscriptApi

o=str(sys.argv[1])
#print(o)
URL=urlparse(o).query[2:]
#print(URL)
#URL='PmYypVozQb4'
#print(URL)


dataset=YouTubeTranscriptApi.get_transcript(URL)

text_list=[d['text'] for d in dataset]

import re

def concatenate_list_data(list):
	result= ''
	for element in list:
		f=re.sub('[^A-Za-z0-9]+', ' ', str(element))
		result += f+' '
	return result


print(concatenate_list_data(text_list))
