@REM
@REM Copyright (c) 2008-2015, Massachusetts Institute of Technology (MIT)
@REM All rights reserved.
@REM
@REM Redistribution and use in source and binary forms, with or without
@REM modification, are permitted provided that the following conditions are met:
@REM
@REM 1. Redistributions of source code must retain the above copyright notice, this
@REM list of conditions and the following disclaimer.
@REM
@REM 2. Redistributions in binary form must reproduce the above copyright notice,
@REM this list of conditions and the following disclaimer in the documentation
@REM and/or other materials provided with the distribution.
@REM
@REM 3. Neither the name of the copyright holder nor the names of its contributors
@REM may be used to endorse or promote products derived from this software without
@REM specific prior written permission.
@REM
@REM THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
@REM AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
@REM IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
@REM DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
@REM FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
@REM DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
@REM SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
@REM CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
@REM OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
@REM OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
@REM

set name=%1

ffmpeg -i %name%.avi -an -vf format=yuv420p -pix_fmt yuv420p -r 24 -sameq -s 640x360 -y INTER.y4m
vpxenc --passes=2 --cpu-used=1 --threads=4 --best --kf-max-dist=48 --target-bitrate=200 --end-usage=0 --output=OUTPUT.webm INTER.y4m
ffmpeg -i %name%.avi -sameq -vn -acodec libvorbis -aq -1 -y OUTPUT.ogg
mkvmerge -o %name%.webm OUTPUT.webm OUTPUT.ogg
ffmpeg -i %name%.avi -vf format=yuv420p -vcodec libx264 -acodec aac -strict experimental -ab 45k -b 150k -g 48 -r 24 -s 640x360 -y %name%.mp4
ffmpeg -i %name%.avi -vf format=yuv420p -vcodec libtheora -acodec libvorbis -b 300k -aq -1 -r 24 -g 48 -s 640x360 -f ogg %name%.ogg
ffmpeg -i %name%.mp4 -an -vcodec mjpeg -vframes 1 output.jpg
jpegtran -copy none -optimize output.jpg %name%.jpg
del inter.y4m output.ogg output.webm output.jpg