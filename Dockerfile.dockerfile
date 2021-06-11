FROM gcr.io/google-appengine/php
COPY notice.sh /usr/bin
ENTRYPOINT ["/usr/bin/notice.sh"]