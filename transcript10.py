from urllib.parse import urlparse
import sys
print('11111')

from youtube_transcript_api import YouTubeTranscriptApi
print('22222')



#print ('This is the name of the script: ', sys.argv[0])
#print ('Number of arguments: ', len(sys.argv))
#print ('The arguments are: ' , str(sys.argv))
o=str(sys.argv[1])
#print('    ******')
#print(o)

#o=urlparse('https://www.youtube.com/watch?v=E3URhJx0NSw&t')
URL=urlparse(o).query[2:]

#print(URL)



dataset=YouTubeTranscriptApi.get_transcript(URL)

#T[3]
text_list=[d['text'] for d in dataset]

def concatenate_list_data(list):
    result= ''
    for element in list:
        result += str(element)+' '
    return result


print(concatenate_list_data(text_list))
