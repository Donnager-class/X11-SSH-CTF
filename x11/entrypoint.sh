#! /bin/sh
docker run -d --name x11box-active -v /data/projects:/projects -p 6000:22 x11box
