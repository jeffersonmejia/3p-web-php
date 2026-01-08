#!/bin/bash
#!/bin/bash

set -e

sudo systemctl enable docker.service
sudo systemctl enable docker.socket

sudo systemctl start docker.service
sudo systemctl start docker.socket

sudo systemctl status docker.service --no-pager
