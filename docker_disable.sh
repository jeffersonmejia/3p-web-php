#!/bin/bash
#!/bin/bash

set -e

sudo systemctl disable --now containerd
sudo systemctl disable --now docker.service
sudo systemctl disable --now docker.socket


sudo systemctl status docker.service --no-pager
sudo docker compose down
