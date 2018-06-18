from __future__ import unicode_literals
import youtube_dl, sys, json

ydl_opts = {}
url = sys.argv[1]
with youtube_dl.YoutubeDL(ydl_opts) as ydl:
    info_dict = ydl.extract_info(url, download=False)
    formats = info_dict['formats'][9]
    video_url = formats['url']
    print(video_url)
   