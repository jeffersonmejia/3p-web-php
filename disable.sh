#!/bin/bash
#!/bin/bash

set -e


sudo systemctl stop docker.service
sudo systemctl stop docker.socket

sudo systemctl disable docker.service
sudo systemctl disable docker.socket


sudo systemctl status docker.service --no-pager
